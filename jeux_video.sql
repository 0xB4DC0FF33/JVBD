-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Février 2016 à 17:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

CREATE TABLE IF NOT EXISTS `jeux_video` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `console` varchar(255) NOT NULL,
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT '0',
  `commentaires` text NOT NULL,
  `image` varchar(255) NOT NULL COMMENT 'lien vers une image du jeu',
  KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `jeux_video`
--

INSERT INTO `jeux_video` (`ID`, `nom`, `console`, `nbre_joueurs_max`, `commentaires`, `image`) VALUES
(1, 'Super Mario Bros', 'NES', 1, 'Un jeu d''anthologie !', '/img/SMB.jpeg'),
(2, 'Sonic', 'Megadrive', 1, 'Pour moi, le meilleur jeu du monde !', '/img/sonic.jpg'),
(3, 'Zelda : ocarina of time', 'Nintendo 64', 1, 'Un jeu grand, beau et complet comme on en voit rarement de nos jours', '/img/zelda.png'),
(4, 'Mario Kart 64', 'Nintendo 64', 4, 'Un excellent jeu de kart !', '/img/MK64.png'),
(5, 'Super Smash Bros Melee', 'GameCube', 4, 'Un jeu de baston délirant !', '/img/SSBM.png'),
(6, 'Dead or Alive', 'Xbox', 4, 'Le plus beau jeu de baston jamais créé', '/img/dead-or-alive.jpg'),
(7, 'Dead or Alive Xtreme Beach Volley Ball', 'Xbox', 4, 'Un jeu de beach volley de toute beauté o_O', '/img/doaebvb.jpg'),
(8, 'Enter the Matrix', 'PC', 1, 'Plutôt bof comme jeu, mais ça complète bien le film', '/img/matrix.jpg'),
(9, 'Max Payne 2', 'PC', 1, 'Très réaliste, une sorte de film noir sur fond d''histoire d''amour. A essayer !', '/img/maxpayne.jpg'),
(10, 'Yoshi''s Island', 'SuperNES', 1, 'Le paradis des Yoshis :o)', '/img/yoshi.jpg'),
(11, 'Commandos 3', 'PC', 12, 'Un bon jeu d''action où on dirige un commando pendant la 2ème guerre mondiale !', '/img/Commandos.png'),
(12, 'Final Fantasy X', 'PS2', 1, 'Encore un Final Fantasy mais celui la est encore plus beau !', '/img/FFX.png'),
(13, 'Pokemon Rubis', 'GBA', 4, 'Pika-Pika-chu !!!', '/img/PokeRubis.png'),
(14, 'Starcraft', 'PC', 8, 'Le meilleur jeux pc de tout les temps !', '/img/starcraft.jpg'),
(15, 'Grand Theft Auto 3', 'PS2', 1, 'Comme dans les autres Gta on ecrase tout le monde :) .', '/img/GTA3.jpg'),
(16, 'Homeworld 2', 'PC', 6, 'Superbe ! o_O', '/img/Homeworld.jpg'),
(17, 'Aladin', 'SuperNES', 1, 'Comme le dessin Animé !', '/img/Aladdin.jpg'),
(18, 'Super Mario Bros 3', 'SuperNES', 2, 'Le meilleur Mario selon moi.', '/img/super-mario-bros-3-001.jpg'),
(19, 'SSX 3', 'Xbox', 2, 'Un très bon jeu de snow !', '/img/ssx3.jpg'),
(20, 'Star Wars : Jedi outcast', 'Xbox', 1, 'Encore un jeu sur star-wars où on se prend pour Luke Skywalker !', '/img/full20040607062239.jpg'),
(21, 'Actua Soccer 3', 'PS', 2, 'Un jeu de foot assez bof ...', '/img/aso3pc0b.jpg'),
(22, 'Time Crisis 3', 'PS2', 1, 'Un troisième volet efficace mais pas vraiment surprenant', '/img/51HS7TDN54L.jpg'),
(23, 'X-FILES', 'PS', 1, 'Un jeu censé ressembler a la série mais assez raté ...', '/img/xfile.jpg'),
(24, 'Soul Calibur 2', 'Xbox', 1, 'Un jeu bien axé sur le combat', '/img/658788-front.jpg'),
(25, 'Diablo', 'PS', 1, 'Comme sur PC mais la c''est sur un ecran de télé :) !', '/img/Diablo_Coverart.png'),
(26, 'Street Fighter 2', 'Megadrive', 2, 'Le célèbre jeu de combat !', '/img/street-fighter-2.jpg'),
(27, 'Gundam Battle Assault 2', 'PS', 1, 'Jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement', '/img/Gundam_Battle_Assault_2.jpg'),
(28, 'Spider-Man', 'Megadrive', 1, 'Vivez l''aventure de l''homme araignée', '/img/spiderman.jpg'),
(29, 'Midtown Madness 3', 'Xbox', 6, 'Dans la suite des autres versions de Midtown Madness', '/img/Midtown_Madness_3.png'),
(30, 'Tetris', 'Gameboy', 1, 'Qui ne connait pas ? ', '/img/Tetris_Boxshot.jpg'),
(31, 'The Rocketeer', 'NES', 1, 'Un super un film et un jeu de m*rde ...', '/img/rocketeer.jpg'),
(32, 'Pro Evolution Soccer 3', 'PS2', 2, 'Un petit jeu de foot sur PS2', '/img/Pro_Evolution_Soccer_3.jpg'),
(33, 'Ice Hockey', 'NES', 2, 'Jamais joué mais a mon avis ca parle de hockey sur glace ... =)', '/img/250px-Icehockeyvideogame.jpg'),
(34, 'Sydney 2000', 'Dreamcast', 2, 'Les JO de Sydney dans votre salon !', '/img/9691_front.jpg'),
(35, 'NBA 2k', 'Dreamcast', 2, 'A votre avis :p ?', '/img/nba2k_dcbox.jpg'),
(36, 'Aliens Versus Predator : Extinction', 'PS2', 2, 'Un shoot''em up pour pc', '/img/Aliens_Versus_Predator_Extinction_Cover.jpg'),
(37, 'Crazy Taxi', 'Dreamcast', 1, 'Conduite de taxi en folie !', '/img/35729-crazy-taxi-dreamcast.jpg'),
(38, 'Le Maillon Faible', 'PS2', 1, 'Le jeu de l''émission', '/img/le-maillon-faible-e5927.jpg'),
(39, 'FIFA 64', 'Nintendo 64', 2, 'Le premier jeu de foot sur la N64 =) !', '/img/Fifa64.jpg'),
(40, 'Qui Veut Gagner Des Millions', 'PS2', 1, 'Le jeu de l''émission', '/img/qui-veut-gagner-des-millions-seconde-edition-e6772.jpg'),
(41, 'Monopoly', 'Nintendo 64', 4, 'Bheuuu le monopoly sur N64 !', '/img/n64_monopoly_64_p_0ngunh.jpg'),
(42, 'Taxi 3', 'PS2', 4, 'Un jeu de voiture sur le film', '/img/93708_front.jpg'),
(43, 'Indiana Jones Et Le Tombeau De L''Empereur', 'PS2', 1, 'Notre aventurier préféré est de retour !!!', '/img/Indiana_Jones_and_the_Emperor''s_Tomb_Coverart.png'),
(44, 'F-ZERO', 'GBA', 4, 'Un super jeu de course futuriste !', '/img/Vgb8UG6.jpg'),
(45, 'Harry Potter Et La Chambre Des Secrets', 'Xbox', 1, 'Abracadabra !! Le célebre magicien est de retour !', '/img/hpcsxb0f.jpg'),
(46, 'Half-Life', 'PC', 32, 'L''autre meilleur jeu de tout les temps (surtout ses mods).', '/img/halfpc0f.jpg'),
(47, 'Myst III Exile', 'Xbox', 1, 'Un jeu de réflexion', '/img/myst3.jpg'),
(48, 'Wario World', 'Gamecube', 4, 'Wario vs Mario ! Qui gagnera ! ?', '/img/Wario_World_game_cover.jpg'),
(49, 'Rollercoaster Tycoon', 'Xbox', 1, 'Jeu de gestion d''un parc d''attraction', '/img/back.jpg'),
(50, 'Splinter Cell', 'Xbox', 1, 'Jeu magnifique !', '/img/1055611.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
