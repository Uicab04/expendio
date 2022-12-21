
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Savory &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

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
		
		
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/xd.png)" data-stellar-background-ratio="0.5">
	


<!-- lo de la pagina -->
    <div class="gtco-loader"></div>
	
	<div id="page">
 


	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Chunhuhub <em>.</em></a></div>
				</div>
        
				<div class="col-xs-8 text-right menu-1">
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
        </form>
					<ul>
            <li><a href="index.php">Inicio</a></li>
						<li><a href="menu.php">Menu</a></li>
					
						<li class="has-dropdown">
							<a href="register.html">Registrarse</a>
							<!-- <ul class="dropdown">
								<li><a href="#">Food Catering</a></li>
								<li><a href="#">Wedding Celebration</a></li>
								<li><a href="#">Birthday's Celebration</a></li>
							</ul> -->
						</li>
						
						<li class="btn-cta"><a href="files/cerrarSesion.php"><span>Cerrar sesión</span></a></li>
						<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
							
						</i>
							
					</ul>
					

				<div class="row">
				

		        
	
					
					
						<div class="container">
							<div class="row">
								<div class="col-lg-5">
									<div class="section-content bg-white p-5 shadow">
										<div class="heading-section text-center">
											<span  style="color:#000000" class="subheading">
												Actualizar productos
											</span>
											
										</div>
										<form name="formularioProducto" >
											<!-- ation es donde enviamos al rachivo php  -->
											<div class="row">
												<div class="col-md-12 form-group">
													<input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Nombre del producto">
													<!-- type acepta valores de tipo texto -->
					
												</div>
												<div class="col-md-12 form-group">
													<input type="text" class="form-control" id="precio" name="precio" placeholder="Precio del producto">
												</div>
											  
												 
												<div class="col-md-12 form-group">
													<textarea class="form-control" id="descripcion_producto" name="descripcion_producto" rows="6" placeholder="Comentario ..."></textarea>
												</div>
												<div class="col-md-12 text-center">
													<input type="button" onclick="validarFormularioProducto()" class="btn btn-primary btn-shadow btn-lg" value="Guardar producto">
												</div>
											</div>
										</form>
										<div id="registrado"></div>
									</div>
								</div>
							</div>
							
						</div>
					</section>
				</div>
			</div>
		</div>
	</header>
	<?php
        include("header/footer.php");
    ?>

	

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
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>
    <script src="scripts/validacion.js"></script>
    <script src="scripts/ajax.js"></script>
	</body>
</html>

