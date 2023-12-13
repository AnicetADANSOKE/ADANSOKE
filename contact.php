<!DOCTYPE HTML>
<!--
	Aesthetic by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
	<title> USAFOOT </title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

		<!-- Header Begin -->
    	<!-- Importer la page d'en-tête sur la page d'acceuil -->
		<?php include_once("Modèles/header.php") ?>
		<!-- Header Close -->

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row gtco-heading">
					<div class="col-md-7 text-left">
						<h2>Nous joindre</h2>
						<p> Pour plus d'informations, veuillez nous joindre par:</p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
						<p class="mt-md"><a href="#" class="btn btn-special btn-block">Contacter-Nous</a></p>
					</div>
				</div>
				 <div class="row">
					<div class="col-md-6">
					<form id="contact"action="Controlleurs/envoyer_message.php"method="POST">
							<div class="form-group">
								<label for="nomcomplet">Nom complet</label>
								<input name="nomcomplet" type="text" class="form-control" id="nomcomplet">
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input name="email" type="text" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="message"></label>
								<textarea name="messages" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn btn-special" value="Envoyez Message">
							</div>
						</form>
					</div>
					<div class="col-md-5 col-md-push-1">
						<div class="gtco-contact-info">
							<h3>Nos adresses</h3>
							<p> Nous sommes situé au sud du Bénin précisement dans le département du PLATEAU, Commune d'Ifangni, Arrondissement de Banigbé.</p>
							<ul >
								 
								<li class="phone"><a href="tel://+229 96 91 70 50"> +229 96 91 70 50</a></li>
								<li class="email"><a href="#">ussafootifangni@gmail.com</a></li>
								<li class="url"><a href="#">https://www.facebook.com/profile.php?id=10007225038<4943/a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END Contact -->

		<div id="map"></div>

		

		<div class="gtco-section gto-features">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-zip icon"></i>
							<div class="copy">
							<h3>Activités</h3>
								<p>Travailler son endurance: Cyclisme, aviron, course à pied, natation. <br> <br>Accroitre sa masse musculaire: musculation, gymnastique.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-hummer icon"></i>
							<div class="copy">
								<h3>Programmes d'entraînement</h3>
								<p>Mercredi 15h - 18h <br> <br> Vendredi 15h - 18h <br> <br> Samedi 15h - 18h </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-plug icon"></i>
							<div class="copy">
								<h3> Evénement à venir</h3>
								<p>Matchs de gala et de récompense des meilleurs joueurs et acteurs sportifs de USAFOOT 2023. <br> <br> Assemblée générale de USAFOOT de fin d'année. <br> <br> USAFOOT FOOTBALL KISD 2023 <br> <br> Noêl USAFOOT 2023</p>
								 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- footer Begin -->
		<?php include_once("Modèles/footer.php") ?>
		<!-- END footer -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

