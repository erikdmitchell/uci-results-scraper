var counter=0;
var totalRaces=0;
var races=[];

jQuery(document).ready(function($) {
	/**
	 * gets an output of races via the season selected
	 */
	$('#get-races-curl').click(function(e) {
		e.preventDefault();
		
		showLoader('#wpcontent');
		
		$('#get-race-data').html('');
	
		var data={
			'action' : 'get_race_data_non_db',
			'url' : $('.url-dd').find(':selected').data('url'),
			'discipline' : $('.url-dd').find(':selected').data('discipline'),
			'season' : $('.url-dd').find(':selected').data('season')
		};

		$.post(ajaxurl, data, function(response) {
			$('#get-race-data').html(response);
			hideLoader();
		});
	});
	
	/**
	 * gets the checked races and adds them to db, returning a success (or error) message
	 */
	$('#add-races-curl-to-db').live('click',function(e) {
		e.preventDefault();

		var selected = [];
		var season=$('.url-dd#season option:selected').text();

		$('#add-races-to-db input:checked').each(function() {
			if ($(this).attr('id')!='selectall')
	    	selected.push($(this).val());
		});

		var data={
			'action' : 'prepare_add_races_to_db',
			'races' : selected
		};

		$.post(ajaxurl, data, function(response) {
			$('#get-race-data').html('');

			var races=$.parseJSON(response);
			totalRaces=races.length;

			$('#get-race-data').append('<div id="counter"><span class="ctr">0</span> out of '+totalRaces+' proccessed.');

			addRace(races.shift());	

		});
	});
			
});

function addRace(race) {
	jQuery.ajax({
		type: 'POST',
		url: ajaxurl,
		data: {action: 'add_race_to_db', race: race},
		success: function(response) {
			processRaceResponse(response);

			if (races.length) {
				addRace(races.shift());
			}
			else {
				finishProgressBar();
			}
		},
		error: function(response) {
			processRaceResponse(response);

			if (races.length) {
				addRace(races.shift());
			}
			else {
				finishProgressBar();
			}
		}
	});
	
}

function processRaceResponse(response) {
	jQuery('#get-race-data').append(response);

	counter++;
	updateProgressBar(counter, totalRaces);	
}	

function updateProgressBar(counter, total) {
	jQuery('#get-race-data').find('#counter span.ctr').text(counter);	
}

function finishProgressBar() {	
}