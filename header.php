<!DOCTYPE html>
<html lang="es">
<head>
    <title>  <?php bloginfo('name'); echo" | "; bloginfo('description');?></title>
	<?php wp_head();?>
	<meta name="description" content="Gerencia de proyectos | Gestión de Diseño | Gestión de Adquisiciones | Gestión de la Construcción | Consultorias | Lima | Perú"/>
	<meta name="author" content="">
	<meta name="Language" content="es" />
	<meta name="Author" content="http://www.ajmgrupo.com/" />
	<meta name="Owner" content="webmaster@ajgrupo.com" />
	<meta name="revisit-after" content="1 days" />
	<meta name="robots" content="all" />
		
	<meta name="rating" content="General" />
	<meta name="distribution" content="global" />
	<meta name="AJM - TU SOCIO ESTRATÉGICO DIRECTO" content="www.ajmgrupo.com" />
    <link rel="SHORTCUT ICON" href="<?php bloginfo('stylesheet_directory');?>/assets/img/logos/black-logo.png"  />
	<meta property="og:site_name" content="AJM - TU SOCIO ESTRATÉGICO DIRECTO">
	<meta property="og:title" content="AJM - TU SOCIO ESTRATÉGICO DIRECTO" />
	<meta property="og:description" content="Gerencia de proyectos | Gestión de Diseño | Gestión de Adquisiciones | Gestión de la Construcción | Consultorias | Lima | Perú" />
	<meta property="og:image" itemprop="image" content="http://ajmgrupo.com/assets/img/logos/black-logo.png">
	<meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/assets/img/favicon.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/skins/default.css">

</head>
<body id="top">
<div class="page_loader"></div>

<!-- main header start -->

<?php
$slider = false;
if (is_front_page()):
    $slider = true;
endif;

?>
<header class="main-header <?php if($slider== true){ echo 'sticky-header'; }else{ echo 'header-shrink'; }?>" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex w-50 mr-auto" href="<?php echo get_option('home'); ?>">
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logos/black-logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100 deslizarright" id="navbar" >
                        <ul class="navbar-nav w-100 justify-content-center">
							<li class="nav-item ">
                                <a class="nav-link <?php echo ($_SERVER["REQUEST_URI"]=='/') ? "active":""; ?>" href="<?php echo get_option('home'); ?>" >
                                    INICIO 
                                </a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="<?php echo get_option('home'); ?>#projects" >
                                    PROYECTOS
                                </a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link <?php echo ($_SERVER["REQUEST_URI"]=='/nosotros/') ? "active":""; ?>" href="<?php echo get_permalink(get_page_by_path('nosotros')); ?>" >
                                    NUESTRO ADN
                                </a>
                            </li>
							<li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SERVICIOS
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item <?php echo ($_SERVER["REQUEST_URI"]=='/gestion-del-diseno/') ? "active":""; ?>" href="<?php echo get_permalink(get_page_by_path('gestion-del-diseno')); ?>">GESTIÓN DEL DISEÑO</a></li>
                                    <li><a class="dropdown-item <?php echo ($_SERVER["REQUEST_URI"]=='/gestion-de-adquisiciones/') ? "active":""; ?>" href="<?php echo get_permalink(get_page_by_path('gestion-de-adquisiciones')); ?>">GESTIÓN DE ADQUISICIONES</a></li>
                                    <li><a class="dropdown-item <?php echo ($_SERVER["REQUEST_URI"]=='/gestion-de-construccion/') ? "active":""; ?>" href="<?php echo get_permalink(get_page_by_path('gestion-de-construccion')); ?>">GESTIÓN DE LA CONSTRUCCIÓN</a></li>
                                    <li><a class="dropdown-item <?php echo ($_SERVER["REQUEST_URI"]=='/consultorias/') ? "active":""; ?>" href="<?php echo get_permalink(get_page_by_path('consultorias')); ?>">CONSULTORÍAS</a></li>
                                </ul>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="<?php echo get_option('home'); ?>#clients" >
                                    CLIENTES
                                </a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="<?php echo get_option('home'); ?>#contact" >
                                    CONTACTO
                                </a>
                            </li>
                            
                             <li class="nav-item hdn">
                                <a href="https://www.linkedin.com/company/ajm-grupo" class="nav-link btn btn-rounded">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
							 <li class="nav-item hdn">
                                <a href="https://instagram.com/ajmgrupo?igshid=1n3l5n3cgdzf1" class="nav-link btn btn-rounded" style="margin-left: 0px; padding: 30px 0px;">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->
