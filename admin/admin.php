<?php
	/**
	 * setup_config function.
	 * 
	 * @access public
	 * @return void
	 */
	public function setup_config() {
		$config['urls']=array(
			'cross' => array(
				'20162017' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=306&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=-1&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',
				'20152016' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=306&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=489&StartDateSort=20150830&EndDateSort=20160301&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',
				'20142015' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=306&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=487&StartDateSort=20140830&EndDateSort=20150809&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',
				'20132014' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=306&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=485&StartDateSort=20130907&EndDateSort=20140223&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',
				'20122013' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=306&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=483&StartDateSort=20120908&EndDateSort=20130224&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',
				'20112012' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=306&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=481&StartDateSort=20110910&EndDateSort=20120708&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',
				'20102011' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=306&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=479&StartDateSort=20100911&EndDateSort=20110220&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',
				'20092010' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=306&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=477&StartDateSort=20090913&EndDateSort=20100221&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',
				'20082009' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=306&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=475&StartDateSort=20080914&EndDateSort=20090222&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',
			),
			'road' => array(
				'2017' => 'http://www.uci.infostradasports.com/asp/lib/TheASP.asp?PageID=19004&TaalCode=2&StyleID=0&SportID=102&CompetitionID=-1&EditionID=-1&EventID=-1&GenderID=1&ClassID=1&EventPhaseID=0&Phase1ID=0&Phase2ID=0&CompetitionCodeInv=1&PhaseStatusCode=262280&DerivedEventPhaseID=-1&SeasonID=492&StartDateSort=20161022&EndDateSort=20171024&Detail=1&DerivedCompetitionID=-1&S00=-3&S01=2&S02=1&PageNr0=-1&Cache=8',	
			),
		);

		$this->config=json_decode(json_encode($config), FALSE); // convert to object and store
	}

	/**
	 * race_urls_dropdown function.
	 * 
	 * @access public
	 * @param string $name (default: 'season')
	 * @param string $selected (default: '')
	 * @return void
	 */
	public function race_urls_dropdown($name='season', $selected='') {
		$html='';
		
		$html.='<select class="url-dd" id="'.$name.'" name="'.$name.'">';
			$html.='<option value="0">Select Year</option>';
			
			foreach ($this->config->urls as $discipline => $discipline_urls) :
				$html.='<option>'.$discipline.'</option>';
				
				foreach ($discipline_urls as $season => $url) :
					$html.='<option value="'.$season.'" data-url="'.$url.'" data-season="'.$season.'" data-discipline="'.$discipline.'">&nbsp;&nbsp;&nbsp;'.$season.'</option>';
				endforeach;
				
			endforeach;
		$html.='</select>';
						
		echo $html;
	}
	
	/**
	 * ajax_get_race_data_non_db function.
	 *
	 * @access public
	 * @return void
	 */
	public function ajax_get_race_data_non_db() {
		echo $this->get_race_data(array(
			'season' => $_POST['season'],
			'discipline' => $_POST['discipline'],	
		));

		wp_die();
	}
	
	/**
	 * ajax_prepare_add_races_to_db function.
	 *
	 * @access public
	 * @return void
	 */
	public function ajax_prepare_add_races_to_db() {
		if (empty($_POST['races']))
			return false;

		$races=array();
		foreach ($_POST['races'] as $race) :
			$races[]=unserialize(base64_decode($race));
		endforeach;

		echo json_encode($races);

		wp_die();
	}	
	
	public function get_race_data($args) {
		global $uci_results_admin;
		
		$default_args=array(
			'season' => false,
			'limit' => -1,
			'raw' => false,
			'discipline' => 'cyclocross',	
		);
		$args=wp_parse_args($args, $default_args);
		
		extract($args);
		
		set_time_limit(0); // mex ececution time

		// if no passed url, use config // disabled bt EM
		//if (!$url && isset($uci_results_admin->config->urls->$discipline->$season)) :		
		$url=$uci_results_admin->config->urls->$discipline->$season;
		//elseif (!$url) :
			//return false;
		//endif;

		// check season //
		if (!$season || empty($season))
			return false;
		
		$uci_parse_results=new UCIParseResults();
		$races=$uci_parse_results->get_races($url, $limit);
		
		// append data //
		foreach ($races as $race) :
			$race->discipline=$discipline;
			$race->season=$season;
		endforeach;

		// return object if $raw is true //
		if ($raw)
			return $races;

		return $this->build_default_race_table($races);
	}
	
	/**
	 * is_multi_day_race function.
	 *
	 * @access public
	 * @param string $date (default: '')
	 * @return void
	 */
	public function is_multi_day_race($date='') {
		// clean date //
		$date = htmlentities($date, null, 'utf-8');
		$date = str_replace("&nbsp;", "", $date);

		// if we have a '-' then it's a multi day so we return an array of start/end //
		if (strpos($date, '-') !== false) :
			$dates=explode('-', $date);

			// the first date will lack a year //
			$year=substr($dates[1], -4);
			$dates[0].=$year;

			return $dates;
		endif;

		return false;
	}

	/**
	 * build_default_race_table function.
	 * 
	 * @access public
	 * @param array $races (default: array())
	 * @return void
	 */
	public function build_default_race_table($races=array()) {
		$html=null;

		$html.='<form name="add-races-to-db" id="add-races-to-db" method="post">';
			$html.='<table class="wp-list-table widefat fixed striped pages">';
				$html.='<thead>';
					$html.='<tr>';
						$html.='<td id="cb" class="manage-column column-cb check-column"><input type="checkbox" id="select-all"></td>';
						$html.='<th scope="col" class="race-date">Date</th>';
						$html.='<th scope="col" class="race-name">Event</th>';
						$html.='<th scope="col" class="race-nat">Nat.</th>';
						$html.='<th scope="col" class="race-class">Class</th>';
					$html.='</tr>';
				$html.='</thead>';
				$html.='<tbody id="the-list">';

					foreach ($races as $race) :
						$disabled='';
						$code=$this->build_race_code($race);

						// setup date //
						if ($race->single) :
							$date=$race->start;
						else :
							$date=$race->start.' - '.$race->end;
						endif;

						// if we already have results, bail. there are other check later, but this is a good helper //
						if (uci_results_race_has_results($code))
							$disabled='disabled';

						$html.='<tr>';
							$html.='<th scope="row" class="check-column"><input type="checkbox" name="races[]" value="'.base64_encode(serialize($race)).'" '.$disabled.'></th>';
							$html.='<td class="race-date">'.$date.'</td>';
							$html.='<td class="race-name">'.$race->event.'</td>';
							$html.='<td class="race-nat">'.$race->nat.'</td>';
							$html.='<td class="race-class">'.$race->class.'</td>';
						$html.='</tr>';
					endforeach;

				$html.='</tbody>';
			$html.='</table>';

			$html.='<p class="submit">';
				$html.='<input type="button" name="button" id="add-races-curl-to-db" class="button button-primary" value="Add to DB" />';
			$html.='</p>';
		$html.='</form>';

		return $html;
	}
	
	public function add_race_to_db($race='', $raw_response=false) {
		global $wpdb, $uci_results_pages;

		$new_results=0; // WE NEED TO FIX THIS
		
		if (empty($race))
			return false;

		if (!is_object($race))
			$race=array_to_object($race);
			
		// add race data //
		$race->week=$this->get_race_week($race->end, $race->season);
		$race->code=$this->build_race_code((array) $race);

		// single race - or no //
		if ($race->single) :
			$message=$this->add_single_race($race);
		else :
			$message=$this->add_stage_race($race);
		endif;

		if ($raw_response)
			return array('message' => $message, 'new_result' => $new_results);

		return $message;
	}
	
	protected function add_single_race($race='') {
		echo "add single race\n";
		if (!$this->check_for_dups($race->code)) :			
			if ($race_id=$this->insert_race_into_db($race)) :
				$message='<div class="updated">Added '.$race->code.' to database.</div>';
				//$new_results++;
				$this->add_race_results_to_db($race);
				// update to twitter //
			else :
				$message='<div class="error">Unable to insert '.$race->code.' into the database.</div>';
			endif;

		else :		
			$message='<div class="updated">'.$race->code.' is already in the database</div>';
		endif;
		
		return $message;
	}

	protected function add_stage_race($race='') {
		$message='';		
		$parent_id=$this->add_stage_race_parent($race);

		foreach ($race->stages as $stage) :
			// add on info //
			$stage->code=sanitize_title_with_dashes($stage->event);
			$stage->parent=$parent_id;
			$stage->nat=$race->nat;
			$stage->class=$race->class;
			$stage->season=$race->season;
			$stage->discipline=$race->discipline;
			$stage->start=$stage->date;
			$stage->end=$stage->date;
			$stage->week=$race->week;
		
			if (!$this->check_for_dups($stage->code)) :		
				if ($race_id=$this->insert_race_into_db($stage)) :
					$stage->race_id=$race_id;
					$message.='<div class="updated">Added '.$race->code.' to database.</div>';
					//$new_results++;
					$this->add_race_results_to_db($stage);
					// update to twitter //
				else :
					$message.='<div class="error">Unable to insert '.$race->code.' into the database.</div>';
				endif;
			else :		
				$message.='<div class="updated">'.$race->code.' is already in the database</div>';
			endif;		
		endforeach;
		
		return $message;
	}
	
	/**
	 * add_stage_race_parent function.
	 * 
	 * @access protected
	 * @param string $race (default: '')
	 * @return void
	 */
	protected function add_stage_race_parent($race='') {	
		$id=$this->insert_race_into_db($race);
		
		return $id;
	}
	
	/**
	 * get_add_race_to_db_results function.
	 * 
	 * @access public
	 * @param string $link (default: '')
	 * @param bool $formatted (default: false)
	 * @param int $race_id (default: 0)
	 * @return void
	 */
	public function get_add_race_to_db_results($link='', $formatted=false, $race_id=0) {
		global $wpdb;

		if (empty($link))
			return;

		// get race results data //
		$data=array();
		$race_results=$this->get_race_results($link);
	
		if (!$formatted)
			return $race_results;

		foreach ($race_results as $result) :
			$rider_id=uci_get_rider_id_by_name($result->name);			

			// check if we have a rider id, otherwise create one //
			if (!$rider_id)
				$rider_id='CREATE';

			if (!isset($result->par) || empty($result->par) || is_null($result->par)) :
				$par=0;
			else :
				$par=$result->par;
			endif;

			if (!isset($result->pcr) || empty($result->pcr) || is_null($result->pcr)) :
				$pcr=0;
			else :
				$pcr=$result->pcr;
			endif;

			$data[]=array(
				'race_id' => $race_id,
				'place' => $result->place,
				'name' => $result->name,
				'nat' => $result->nat,
				'age' => $result->age,
				'result' => $result->result,
				'par' => $par,
				'pcr' => $pcr,
				'rider_id' => $rider_id,
			);
		endforeach;

		return $data;		
	}
	
	public function insert_race_into_db($data='') {
		global $wpdb;

		if (empty($data))
			return false;
			
		$post_id=0;		
		$race=$this->get_race_by_code($data->code);
		$race_data=array(
			'post_title' => $data->event,
			'post_content' => '',
			'post_status' => 'publish',	
			'post_type' => 'races',
			'post_name' => $data->code,	
			'post_parent' => isset($data->parent) ? $data->parent : 0,		
		);

		// if race is null, add it, else update it //
		if (!$race) :
			$post_id=wp_insert_post($race_data);
		else :
			$race_data['ID']=$race->ID;
		 	$post_id=wp_update_post($race_data);
		endif;

		// check for error //
		if (is_wp_error($post_id))
			return false;
			
		// update taxonomies //
		wp_set_object_terms($post_id, $data->nat, 'country', false);
		wp_set_object_terms($post_id, $data->class, 'race_class', false);
		wp_set_object_terms($post_id, $data->season, 'season', false);
		wp_set_object_terms($post_id, $data->discipline, 'discipline', false);
		
		// update meta //
		update_post_meta($post_id, '_race_start', $data->start);
		update_post_meta($post_id, '_race_end', $data->end);		
		update_post_meta($post_id, '_race_winner', $data->winner);
		update_post_meta($post_id, '_race_week', $data->week);
		update_post_meta($post_id, '_race_link', $data->url);

		return $post_id;
	}
	
	protected function get_race_by_code($code='') {
		global $wpdb;
		
		$post_id=$wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name IN ('$code') AND post_type IN ('races')");
		
		if ($post_id===null || is_wp_error($post_id))
			return false;
			
		return get_post($post_id);
	}
	
	/**
	 * ajax_add_race_to_db function.
	 *
	 * @access public
	 * @return void
	 */
	public function ajax_add_race_to_db() {
		if (!$_POST['race'])
			return false;

		$code=$this->build_race_code($_POST['race']);

		// add to db //
		if ($this->check_for_dups($code) && $_POST['race']['single']) :
			echo '<div class="updated add-race-to-db-message">Already in db. ('.$code.')</div>';			
		else :
			echo $this->add_race_to_db($_POST['race']);	
		endif;

		wp_die();
	}			
	
	
	/**
 * uci_results_activation function.
 *
 * @access public
 * @return void
 */
function uci_results_activation() {
	// schedule crons	//
	uci_results_schedule_event(current_time('timestamp'), 'threehours', 'uci_results_add_races');

	do_action('uci_results_activation');
}

/**
 * uci_results_deactivation function.
 *
 * @access public
 * @return void
 */
function uci_results_deactivation() {
	// remove crons //
	wp_clear_scheduled_hook('uci_results_add_races');

	do_action('uci_results_deactivation');
}

register_activation_hook(__FILE__, 'uci_results_activation');
register_deactivation_hook(__FILE__, 'uci_results_deactivation');	