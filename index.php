<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>♥ Video games ♥</title>
		<link rel='stylesheet prefetch' href='http://bradfrost.github.com/this-is-responsive/styles.css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<link rel="stylesheet" href="css/stylesheet.css" charset="utf-8">
		<link rel="stylesheet" href="css/dropdowns-enhancement.css" charset="utf-8">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row col-md-offset-1 col-md-4">
				<h1 class="title">annuaire des jeux videos</h1>
				<p>Annuaire absolument pas exhaustif des jeux vidéos</p>
			</div>
			<div class="row">
				<div class="btn-group">
  					<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Checked option <span class="caret"></span></button>
    				<ul class="dropdown-menu">
      					<li><input type="radio" id="ID" name="NAME" value="VALUE"><label for="ID">Label</label></li>

    				</ul>
				</div>
			</div>
		</div>
		<?php
			include("generator.php");
		 ?>
		 <script src="./js/dropdowns-enhancement.js" charset="utf-8"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
