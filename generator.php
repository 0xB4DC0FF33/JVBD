

<?php
$BDD = new PDO('mysql:host=localhost;dbname=test','root',''/*, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXEPTION)*/);
$reponse = $BDD->query($sqlrequest);
?>
		<div id="pattern" class="pattern">
			<ul class="list img-list">

				<?php
					$i = 0;
					while ($donnees = $reponse->fetch()){?>
						<li class="element">
							<a href="#" class="inner container">
								<div class="li-img">
									<img src="<?php echo ".".$donnees['image']?>"/>
								</div>
								<div class="li-text">
									<h4 class="li-head"><?php echo $donnees['nom'];?></h4>
									<p class="li-sub"><?php echo mb_convert_encoding($donnees['description'], "UTF-8");?></p>
								</div>
								<?php if ($donnees['nbre_joueurs_max'] == 1) { ?>
									<span class="label label-primary">Solo</span>
								<?php } else { ?>
									<span class="label label-success"><?php echo $donnees['nbre_joueurs_max'];?> Joueurs</span>
								<?php } ?>
									<span class="label label-info"><?php echo $donnees['plateforme'];?></span>
							</a>
						</li><?php
					$i++;
					}?>
			</ul>
		</div>
