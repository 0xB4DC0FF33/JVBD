<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Video games </title>

		<link rel="shortcut icon" href="favicon.ico" />
		<link rel='stylesheet prefetch' href='http://bradfrost.github.com/this-is-responsive/styles.css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!--<link rel="stylesheet" href="css/dropdowns-enhancement.css" charset="utf-8">-->
		<link rel="stylesheet" href="css/stylesheet.css" charset="utf-8">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row col-md-offset-1 col-md-4">
				<h1 class="title">annuaire des jeux videos</h1>
				<p>Annuaire absolument pas exhaustif des jeux vidéos</p>
			</div>
		</div>
		<div class="container-fluid">
			<form class="Menu" action="index.php" method="get">
				<div class="row">
					<div class="btn-group" id="MenuPlateforme" data-toggle="buttons">
						<button class="btn btn-primary"><input type="checkbox" id="snes" name="snes">SNES</button>
						<button class="btn btn-primary"><input type="checkbox" id="PC" name="PC">PC</button>
						<button class="btn btn-primary"><input type="checkbox" id="NES" name="NES">NES</button>
						<button class="btn btn-primary"><input type="checkbox" id="Megadrive" name="Megadrive">Megadrive</button>
						<button class="btn btn-primary"><input type="checkbox" id="N64" name="N64">Nintendo64</button>
						<button class="btn btn-primary"><input type="checkbox" id="Gamecube" name="Gamecube">GameCube</button>
						<button class="btn btn-primary"><input type="checkbox" id="Xbox" name="Xbox">Xbox</button></button>
						<button class="btn btn-primary"><input type="checkbox" id="PlayStation" name="PlayStation">PlayStation</button>
						<button class="btn btn-primary"><input type="checkbox" id="GBA" name="GBA">GameBoy Advance</button>
						<button class="btn btn-primary"><input type="checkbox" id="Dreamcast" name="Dreamcast">Dreamcast</button>
					</div>
				</div>
				<div class="row">
					<div class="btn-group" id="MenuPlateforme" data-toggle="buttons">
						<button class="btn btn-primary"><input type="checkbox" id="action" name="action">Action</button>
						<button class="btn btn-primary"><input type="checkbox" id="arcade" name="arcade">Arcade</button>
						<button class="btn btn-primary"><input type="checkbox" id="aventure" name="aventure">Aventure</button>
						<button class="btn btn-primary"><input type="checkbox" id="combat" name="combat">Combat</button>
						<button class="btn btn-primary"><input type="checkbox" id="course" name="course">Course</button>
						<button class="btn btn-primary"><input type="checkbox" id="gestion" name="gestion">Gestion</button>
						<button class="btn btn-primary"><input type="checkbox" id="infiltraltion" name="infiltration">Infiltration</button></button>
						<button class="btn btn-primary"><input type="checkbox" id="plateforme" name="plateforme">Plateforme</button>
						<button class="btn btn-primary"><input type="checkbox" id="RPG" name="RPG">Jeu de Rôle</button>
						<button class="btn btn-primary"><input type="checkbox" id="sport" name="sport">Sport</button>
						<button class="btn btn-primary"><input type="checkbox" id="stratégie" name="strategie">Stratégie</button>
					</div>
				</div>
				<div class="row">
					<div class="btn-group" id="MenuJoueurs" data-toggle="buttons">
						<button class="btn btn-primary"><input type="checkbox" id="solo" name="solo">Solo</button>
						<button class="btn btn-primary"><input type="checkbox" id="Multiplayer" name="Multiplayer">Multiplayer</button>
					</div>
					<input type="submit" value="Submit" class="btn btn-success btn-md">
				</div>
			</form>
		</div>
		<?php
			include("MenuReader.php");
			include("generator.php");
		 ?>
		 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		 <!--<script src="./js/dropdowns-enhancement.js" charset="utf-8"></script>-->
	</body>
</html>
