<?php
include("clases/Conexion.php");
include("files/iniciarSesion.php");
include("clases/Usuario.php");
include("clases/Funciones.php");

$funciones = new Funciones();

if(isset($_COOKIE["cDash"])){

    $hash = $_COOKIE["cDash"];

    $idUsuario = $funciones->obtenerIdUsuario($hash);

    if($idUsuario !=0 ){
        $usuario = new Usuario($idUsuario);
    }
    else{
        Header ("Location: login.html");
        exit;
    }
}
if(isset($_SESSION['usuario_id'])){
    $idUsuario = $_SESSION['usuario_id'];
    $usuario = new Usuario($idUsuario);
}

//2222
$db = new Conexion();
$menu = $db->query("SELECT * FROM productos");
// $menuInfo = $menu->fetch();



?>

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
	<title>Expendio &mdash; 1.1</title>
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

	  <!-- Custom styles for this template-->
	  <link href="css/sb-admin-2.min.css" rel="stylesheet">

   <!--qqqq Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!--Alertas-->
    <link href="alertifyjs/css/alertify.css" rel="stylesheet">

	</head>
	<?php
        include("header/header.php");
    ?>
	<body>





	

	
<!-- perfil -->
<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->

<li class="nav-item dropdown no-arrow">
	<a class="nav-link dropdown-toggle" href="menu.php" id="userDropdown" role="button"
		data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="mr-2 d-none d-lg-inline text-black-600 small"><?php echo $usuario->nombre; ?></span>
		<img class="img-profile rounded-circle"
			src="img/undraw_profile.svg"  
			width="60" height="60" href="menu.php">
	</a>
	<!-- Dropdown - User Information -->
	<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
		aria-labelledby="userDropdown">
		<a class="dropdown-item" style="color:#000000" href="javascript:editarUsuario(<?php echo $idUsuario; ?>)">
			<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
			Perfil
		</a>
		
	</div>

	
</li>




<!-- perfil -->



            <!-- qqDivider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if($usuario->tipo == 1): ?>
            <li class="nav-item active">
                <a class="nav-link" href="javascript:verUsuario()">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Usuarios registrados</span></a>
            </li>

			<li><a href="ActualizarProd.php">Actualizar productos</a></li>

			<div class="sidebar-heading">
                Permisos Administrador
            </div>

            <?php  endif; ?>
            <!--para mostrar la lista de usuarios -->
            <hr class="sidebar-divider">
			<div class="row">
				<div id="informacion"></div>
			</div>


            <!-- Heading -->
           
				
				</div>
			</div>



			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/xd.png)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">



					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Reserva tu pedido <a href="https://www.facebook.com/jessica.uex" target="_blank">Jessi</a></span>
							<h1 class="cursive-font">Expendio BIMBO</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								
								</div>
							</div>
						</div>
						
					</div>
					<style>
			.slide {
				position: relative;
				box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
				margin-top: 26px;
			}

			.slide-inner {
				position: relative;
				overflow: hidden;
				width: 100%;
				height: calc( 300px + 3em);
			}

			.slide-open:checked + .slide-item {
				position: static;
				opacity: 100;
			}

			.slide-item {
				position: absolute;
				opacity: 0;
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}

			.slide-item img {
				display: block;
				height: auto;
				max-width: 100%;
			}

			.slide-control {
				background: rgba(0, 0, 0, 0.28);
				border-radius: 50%;
				color: #fff;
				cursor: pointer;
				display: none;
				font-size: 40px;
				height: 40px;
				line-height: 35px;
				position: absolute;
				top: 50%;
				-webkit-transform: translate(0, -50%);
				cursor: pointer;
				-ms-transform: translate(0, -50%);
				transform: translate(0, -50%);
				text-align: center;
				width: 40px;
				z-index: 10;
			}

			.slide-control.prev {
				left: 2%;
			}

			.slide-control.next {
				right: 2%;
			}

			.slide-control:hover {
				background: rgba(0, 0, 0, 0.8);
				color: #aaaaaa;
			}

			#slide-1:checked ~ .control-1,
			#slide-2:checked ~ .control-2,
			#slide-3:checked ~ .control-3 {
				display: block;
			}

			.slide-indicador {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}

			.slide-indicador li {
				display: inline-block;
				margin: 0 5px;
			}

			.slide-circulo {
				color: #828282;
				cursor: pointer;
				display: block;
				font-size: 35px;
			}

			.slide-circulo:hover {
				color: #aaaaaa;
			}

			#slide-1:checked ~ .control-1 ~ .slide-indicador 
			 	li:nth-child(1) .slide-circulo,
			#slide-2:checked ~ .control-2 ~ .slide-indicador 
			 	 li:nth-child(2) .slide-circulo,
			#slide-3:checked ~ .control-3 ~ .slide-indicador 
			 	 li:nth-child(3) .slide-circulo {
				color: #428bca;
			}

			#titulo {
				width: 100%;
				position: absolute;
				padding: 0px;
				margin: 0px auto;
				text-align: center;
				font-size: 27px;
				color: rgba(255, 255, 255, 1);
				font-family: 'Open Sans', sans-serif;
				z-index: 9999;
				text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), 
			 	    -1px 0px 2px rgba(255, 255, 255, 0);
			}
		</style>
	</head>
	<body>
		<div class="slide">
			<div class="slide-inner">
				<input class="slide-open" type="radio" id="slide-1" 
			 	     name="slide" aria-hidden="true" hidden="" checked="checked">
				<div class="slide-item">
					<img src="images/._imag_5.jpeg">
				</div>
				<input class="slide-open" type="radio" id="slide-2" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="images/imagen_8.jpeg">
				</div>
				<input class="slide-open" type="radio" id="slide-3" 
			 	     name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="images/luah.jpeg">
				</div>
				<label for="slide-3" class="slide-control prev control-1">‹</label>
				<label for="slide-2" class="slide-control next control-1">›</label>
				<label for="slide-1" class="slide-control prev control-2">‹</label>
				<label for="slide-3" class="slide-control next control-2">›</label>
				<label for="slide-2" class="slide-control prev control-3">‹</label>
				<label for="slide-1" class="slide-control next control-3">›</label>
				<ol class="slide-indicador">
					<li>
						<label for="slide-1" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-2" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-3" class="slide-circulo">•</label>
					</li>
				</ol>
			</div>
		</div>
					
							
					
				</div>
			</div>
			</div>







	</header>

	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Productos mas comprados</h2>
					<p>Hemos puesto en marcha esta nueva iniciativa de comunicación para estar más cerca de ti.</p>
				</div>
			</div>
			<div class="row">

				<!-- Menu productos uicab -->

			
                <?php foreach($menu as $m): ?>
				<div class="col-lg-4 col-md-4 col-sm-6">
				
					<a href="images/<?php echo $m["imagen"]; ?>" class="fh5co-card-item image-popup">
					
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							
							<img src="images/<?php echo $m["imagen"]; ?>" alt="Image" class="img-responsive">
							
							
						</figure>
						
						<div class="fh5co-text">
							<h2><?php echo $m["nombre_producto"]; ?></h2>
							<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia..</p> -->
							<p><span class="price cursive-font">$<?php echo $m["precio"]; ?></span></p>
							<button type="button" class="btn btn-secondary">Comprar</button>
						</div>
						
						
					</a>
					
				</div>
				<?php endforeach; ?>

				<!--  2-->s
			

			</div>
		</div>
	</div>
	</head>
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
	<script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
	<!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


	    <!-- Page level custom scripts -->
		<script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="scripts/ajax.js"></script>
    <script src="scripts/validacion.js"></script>
    <script src="alertifyjs/alertify.min.js"></script>

	</body>
	
</html>

