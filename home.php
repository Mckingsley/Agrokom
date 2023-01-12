<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./styles.css">
	<link rel="stylesheet" type="text/css" href="./media.css">
	<link rel="stylesheet" type="text/css" href="./fontawesome-web/css/all.min.css">
	<title>AGROKOM</title>
</head>
<body>

		<div class="body">
			<?php include('./includes/header.php'); ?>


			<main>
				<div class="slider">
					<img src="./images/acceuil/ac4.jpg" alt="images1" class="img_slider active">
					<img src="./images/acceuil/ac3.JPG" alt="images2" class="img_slider ">
					<img src="./images/acceuil/ac2.jpg" alt="images3" class="img_slider">
					<!-- <img src="./images/im07.jpg" alt="images4" class="img_slider"> -->
					<!-- <img src="./images/im08.jpg" alt="images5" class="img_slider"> -->
					<!-- <img src="./images/im05.jpg" alt="images5" class="img_slider"> -->
					<!-- <img src="./images/im06.jpg" alt="images5" class="img_slider"> -->

					<div class="suivant">
						<i class="fas fa-chevron-circle-right"></i>
					</div>

					<div class="precedent">
						<i class="fas fa-chevron-circle-left"></i>
					</div>
				</div>
				
			</main>

			<h1 class="products-title"> NOS PRODUITS</h1>


			<div class="products" >
				<div class="bloc1"> 
					<span>Les graines de Soja biologique </span>
					<div class="soja_graine"></div>
					<p align="left">
						Le soja d’AGROKOM est produit dans le respect des normes de 
						l’agriculture biologique. C’est une légumineuse très réputée 
						pour sa richesse en protéine végétale et qui peut être intégrer 
						en tout ou partie de l’alimentation animale
					</p>
					<span>Les graines de Sésame biologique  </span>
					<div class="sesame_graine"></div>
					<p align="left">
						Le sésame fait partie des aliments les plus riches en antioxydants. 
						Ces superaliments boostent la mémoire, aident à réguler le transit intestinal, 
						à lutter contre le mauvais cholestérol et à renforcer le système immunitaire.
					</p>
					<span> Le Beurre de Karité  </span>
					<div class="beurre_karite"></div>
					<p align="left">
						Le beurre de karité est un beurre végétal issue de la 
						pression des amandes de karité, riche en vitamine A et 
						très prisé dans les cosmétiques. Il apporte de l’élasticité 
						et de la souplesse à l’épiderme puis favorise la régénération 
						des cellules de la peau.
					</p>
					<!-- <div>4</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
				</div>
				<div> 
					<span>L’huile de Soja biologique </span>
					<div class="soja_oil"></div>
					<p align="left">
						L’huile de soja produite par AGROKOM est issue de la 
						pression des graines de soja biologiques. C’est une huile 
						riche en oligo-éléments, utilisée pour la cuisson et 
						l’assaisonnement des plats.)
					</p>
					<span>L'huile de Sésame biologique </span>
					<div class="sesame_oil"></div>
					<p align="left">
						L’huile de sésame est une excellente source d’Oméga 6, 
						d’antioxydants ainsi que des vitamines E, B et de la 
						provitamine A. Sa consommation permet notamment de 
						réduire le taux de cholestérol dans le sang et dans les 
						artères servant ainsi de protecteur cardio-vasculaire.
					</p>
					<span>Le Fonio décortiqué  </span>
					<div class="fonio_deco"></div>
					<p align="left">
						Produit dans la région des plateaux et au nord du Togo, 
						le fonio est un superaliment sans gluten, riche en fibres 
						qui se substitue parfaitement à l'avoine, au blé et au riz 
						dans vos préparations.
					</p>
				</div>
				<div> 
					<span>Le tourteau de Soja biologique </span>
					<div class="soja_tourt"></div>
					<p align="left">
						Issu à 100% de la trituration des graines de soja biologiques, 
						le tourteau de soja biologique constitue un complément protéinique  
						important dans l’alimentation de différentes espèces animales.
					</p>
					<span>Le tourteau de Sésame biologique </span>
					<div class="sesame_tourt"></div>
					<p align="left">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
				</p>
					<span>Le Fonio précuit </span>
					<div class="fonio_cuit"></div>
					<p align="left">
						C'est un céréale utilisé dans la cuisine africaine depuis des millénaires; 
						il regorge de qualités diététiques et nutritionnelles aujourd’hui 
						très recherchées en santé et en alimentation.
					</p>
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



			<?php include('./includes/footer.php'); ?>

		
	</div>

	<script type="text/javascript" src="app.js"></script>


</body>
</html>