<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>aux atc c'est dtc</title>
	<link rel="stylesheet" href="../vue/css/page.css">
</head>
<body>
	<header id="header" class="header">
		<H1>
			Collège Technique "Aumôniers du Travail" <br>
			Enseignement de Promotion Sociale<br>
		</H1>
		<?php
			if(isset($_SESSION['NOM'])){
				echo "bonjour ".$_SESSION['NOM'];
			}
		?>
		<ul>
			<li><a href="../CONTROL/page1.php" >Acceuil</a></li>
			<li><a href="../CONTROL/page2.php" >Contact</a></li>
			<!--
			<li><a href="../vue/destroy.php" >vider_session</a></li>
			-->
		</ul>
	</header>
