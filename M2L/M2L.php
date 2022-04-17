<?php
session_start();
if(!isset($_SESSION["login"]));
if(!isset($_SESSION["mdp"]));
?>


<!DOCTYPE HTML>
<html>

<head>
	<title>Page M2L</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>


<body class="is-preload">
	<div id="page-wrapper">

		<?php include 'header.php'; ?>

		<!-- Gigantic Heading -->
		<section class="wrapper style1">
			<div class="container">
			<center><h1>Bonjour <?php 
			if (!isset($_SESSION["mdp"])){
				echo "vous n'êtes pas connecté !";
			}else{
				echo $_SESSION["login"];
			}
			
			?>
			</h1></center>
			<br>
				<center><h2>PRESENTATION DE LA MAISON DES LIGUES DE LORRAINE</h2></center>
				<hr><br>
				<center><p>La Maison des Ligues est un établissement du Conseil Régional. Ce n’est pas une entité juridique en propre.
					Une maison au service du sport En décidant en 2000 de l'acquisition et la réhabilitation de la Maison
					Régionale des Sports de Lorraine à Tomblaine, la région Lorraine a voulu répondre à des besoins de structuration
					du mouvement sportif lorrain, qui représente aujourd'hui 6 500 clubs, plus de 525 000 licenciés et près de 50 000 bénévoles.
					Véritable lieu de vie, cette Maison propose aux Ligues et Comités, des locaux fonctionnels situés à l'est de Nancy,
					permettant ainsi aux dirigeants, aux bénévoles et aux salariés d'échanger, de partager, de se former et de se regrouper
					dans des conditions optimales. Ce sont ici plus de 3 550 clubs lorrains, toutes disciplines confondues, qui bénéficient
					de cet outil. Un tel établissement est à la fois un facteur fort de cohésion et de qualité du sport régional.
					Il a pour vocation d'héberger les structures sportives régionales, de leur fournir des services administratifs,
					comptables et juridiques. Entièrement financée par la région Lorraine, la Maison Régionale des Sports de Lorraine
					est gérée en partenariat par la région Lorraine et le Comité Régional Olympique et Sportif de Lorraine
					(CROSL) qui est l'initiateur d'une politique sportive régionale unitaire.</p></center>
			</div>
		</section>

		
		<section class="wrapper style1">
			<div class="container">
				<div class="row gtr-200">
					<div id="content">
					<img src="images/maison regionale des sports.jpg" alt="..." class="img-rounded">
						<br><br><br>
						
						<center><a href="https://www.google.com/maps/place/CROS+Grand+Est/@48.6974457,6.2145857,18z/data=!4m13!1m7!3m6!1s0x4794986e17a692cd:0x4ed671b10d82498d!2sNancy!3b1!8m2!3d48.692054!4d6.184417!3m4!1s0x0:0xbf2a63023e634c91!8m2!3d48.6979391!4d6.2149476" class="button is-link">Visiter</a></center>

					</div>
				</div>
		</section>
		<?php include 'footer.php'; ?>