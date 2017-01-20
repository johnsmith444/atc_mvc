<section>
	<h2>Nous contacter</h2>
	<article>
		<h1>liste des valeurs envoyées</h1><br>
		<p>
			nom, prénom :
			<?php
				if(isSet($_POST['NOM'])){
					echo "nom=".$_POST['NOM'];
					$_SESSION["NOM"]=$_POST["NOM"];
				}
				else
					echo "-";
			?>
			<br>
			email :
			<?php
				if(isSet($_POST['EMAIL'])){
					echo "nom=".$_POST['EMAIL'];
				}
				else
					echo "-";
			?>
			<br>
			jesuis :
			<?php
				if(isSet($_POST['JESUIS'])){
					echo "nom=".$_POST['JESUIS'];
				}
				else
					echo "-";
			?>
			<br>
			message :
			<?php
				if(isSet($_POST['MESSAGE'])){
					echo "nom=".$_POST['MESSAGE'];
				}
				else
					echo "-";
			?>
			<br>
			abonnement :
			<?php
				if(isSet($_POST['NEWSLETTER'])){
					echo "nom=".$_POST['NEWSLETTER'];
				}
				else
					echo "-";
			?>
			<br>
		</p>
	</article>
</section>

<section>
	<article>
		<h2>contenu de :</h2>
		<h1>* post</h1>
		<?php
			print_r($_POST);
			/*
			$lib=array("nom", "email", "jesuis", "message", "newsletter");
			$i=0;

			foreach($_POST as $e){
				echo "<br>".$lib[$i]": ".$e;
				$i++;
			}
			*/
		?>
	</article>
	<article>
		<h1>* session</h1>
		<?php print_r($_SESSION); ?>
	</article>
</section>