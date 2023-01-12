<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/Agrokom/styles.css">
	<link rel="stylesheet" type="text/css" href="/Agrokom/fontawesome-web/css/all.min.css">
	<title>Filliere Sesame</title>
</head>
<body>

	<div class="body">

		<?php include('../includes/header.php'); ?>

		<h1 class="products-title"> FILLIERE SESAME </h1>


		<div class="fillieres">
			<div class="f_soja"> 
				<h1> TOURTEAU DE SESAME </h1>
				<a href="/Agrokom/pages/products.php"> EN SAVOIR PLUS <i class="fas fa-chevron-circle-right"></i> </a>
				
			</div>
			<div class="f_sesame"> 
				<h1> HUILE DE SESAME </h1>
				<a href="/Agrokom/pages/products.php"> EN SAVOIR PLUS <i class="fas fa-chevron-circle-right"></i> </a>
				
			</div>
			<div class="f_karite"> 
				<h1> GRAINES BRUTE DE SESAME </h1>
				<a href="/Agrokom/pages/products.php"> EN SAVOIR PLUS <i class="fas fa-chevron-circle-right"></i> </a>
				
			</div>
		</div>

		<div class="home">

				<div class="logo_garde">
					<a href="/Agrokom/"><img src="/Agrokom/images/logos/LOGO_AGROKOM00.png" alt="logo" width="625" height="342" ></a>
				</div>

				<div class="text" >
					<p>
						Expert et pionnier dans la production du tourteau et de l’huile de soja biologique au Togo et en Afrique de l’ouest.
					</p>
					<a href="/Agrokom/home.php"> <span > NOS PRODUITS</span></a>

				</div>

			<div class="produits">
				<div class="soja" onclick=window.location.href='/Agrokom/pages/f_soja.php'> <p><a href="/Agrokom/pages/f_soja.php" >FILIÈRE SOJA</a></p></div>
				<div class="sesame" onclick=window.location.href='/Agrokom/pages/f_sesame.php'><p><a href="/Agrokom/pages/f_sesame.php">FILIÈRE SESAME</a></p></div>
				<div class="karite" onclick=window.location.href='/Agrokom/pages/f_karite.php'> <p><a href="/Agrokom/pages/f_karite.php">FILIÈRE KARITE</a></p></div>
				<div class="fonio" onclick=window.location.href='/Agrokom/pages/f_fonio.php'> <p><a href="/Agrokom/pages/f_karite.php">FILIÈRE FONIO</a></p></div>
			</div>



				
			</div>


		<?php include('../includes/footer.php'); ?>

		

	</div>

	<script type="text/javascript" src="/Agrokom/app.js"></script>

</body>
</html>