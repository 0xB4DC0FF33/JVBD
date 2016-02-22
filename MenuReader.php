<?php

	function requestprepare($request)
	{
		if ( substr($request,strrpos(trim($request),' ')+1) == 'jeux_video') {		// Prepare the request by placing the keywords 'WHERE' and 'OR' or nothing if there is a parenthesis
			$request .= ' WHERE';
		}elseif (substr($request,strrpos(trim($request),' ')+1) == '(') {
			$request .= ' ';
		}else {
			$request .= ' OR';
		}return $request;
	}

////////////////////////////////////////////////////////////////////////////////

	$genre = false;
	$platform = false;
	$arrayGet = array("snes", "PC", "NES", "Megadrive", "N64", "Gamecube", "Xbox", "PlayStation", "GBA", "Dreamcast");			//array for platform
	$arraySQL = array(" plateforme = 'SuperNES'", " plateforme = 'PC'", " plateforme = 'NES'", " plateforme = 'Megadrive'",
	" plateforme = 'Nintendo 64'", " plateforme = 'Gamecube'", " plateforme = 'Xbox'", " plateforme = 'PS' OR plateforme = 'PS2'",
	" plateforme = 'GBA'", " plateforme = 'Dreamcast'");

	$arrayGenre = array("action", "arcade", "aventure", "combat", "course", "gestion", "infiltration", "plateforme", "RPG", "sport", "strategie");		//array for genre
	$SQLGenre = array("Action", "Arcade", "Aventure", "Combat", "Course", "Gestion", "Infiltration", "Plateforme", "RPG", "Sport", "Strategie");


////////////////////////////////////////////////////////////////////////////////

	$sqlrequest = 'SELECT * FROM jeux_video';
	$count = 0;

	while ($count < count($arrayGet)) {												// Read the GET request and put the right keywords in the SQL request
		if (isset($_GET[$arrayGet[$count]])) {
			$sqlrequest = requestprepare($sqlrequest);
			$sqlrequest .= $arraySQL[$count];
			$platform = true;
		} $count++;
	}

	$count = 0;


////////////////////////////////////////////////////////////////////////////////

	while ($count < count($arrayGenre)) {
		if (isset($_GET[$arrayGenre[$count]]) && platform == true) {
			$sqlrequest .= ' AND (';
			$genre = true;
			break;
		}elseif(isset($_GET[$arrayGenre[$count]]) && platform == false) {
			$sqlrequest .= ' WHERE (';
			$genre = true;
			break;
		}
		$count++;
	}
	while ($count < count($arrayGenre)) {
		if (isset($_GET[$arrayGenre[$count]])) {
			$sqlrequest = requestprepare($sqlrequest);
			$sqlrequest .= " genre = '";
			$sqlrequest .= $SQLGenre[$count];
			$sqlrequest .= "'";
		} $count++;
	}
	if ($genre == true) {
		$sqlrequest .= ')';
	}

////////////////////////////////////////////////////////////////////////////////

	if ($genre == false && $platform == false && (isset($_GET['solo']))) {
		$sqlrequest .= ' WHERE nbre_joueurs_max = 1';
	}else if ($genre == false && $platform == false && isset($_GET['Multiplayer'])){
		$sqlrequest .= " WHERE nbre_joueurs_max != 1";
	}else if (($genre == true || $platform == true) && isset($_GET['solo'])){														// Manage the exeptions of the solo/multiplayer choices
		$sqlrequest .= " AND nbre_joueurs_max = 1";
	}elseif (($genre == true || $platform == true) && isset($_GET['Multiplayer'])){
		$sqlrequest .= " AND nbre_joueurs_max != 1";
	}


	echo "<h1>".$sqlrequest."</h1>";

?>
