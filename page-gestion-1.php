<?php
/**
* Template Name: Pagina de Gestion 1
*
* @package WordPress
*/
 get_header(); ?>
  

<div class="services content-area-7 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>¿EN QUÉ TE AYUDAMOS?</h1>
        </div>
        <div class="row">
            <div class="offset-md-2 col-lg-2 col-md-6 col-sm-6  s-brd-2 wow fadeInLeft delay-04s" style="border-left:none;">
               <a href="<?php echo get_permalink(get_page_by_path('gestion-del-diseno')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/1-active.png" class="widthimg100"> </a>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 s-brd-1 wow fadeInUp delay-04s">
                <a href="<?php echo get_permalink(get_page_by_path('gestion-de-adquisiciones')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/2.png" class="widthimg100"></a>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6  s-brd-3 wow fadeInDown delay-04s">
               <a href="<?php echo get_permalink(get_page_by_path('gestion-de-construccion')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/3.png" class="widthimg100"></a>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6  wow fadeInRight delay-04s">
               <a href="<?php echo get_permalink(get_page_by_path('consultorias')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/4.png" class="widthimg100"></a>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->
<!-- About us start -->
<div class="about-us content-area-9 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="properties-service-v">
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-photo/1.png" style="width:100%; height:auto; margin: 0 auto;">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-text">
                    <p>Implica el gerenciamiento desde el
					planeamiento conceptual, evaluación
					técnica – económica hasta la
					consolidación del desarrollo del
					proyecto. Para ello, integramos a los
					interesados de la mencionada fase,
					tales como los proyectistas,
					entidades públicas competentes y
					constructores. Por ello, comprende
					en consolidar las siguientes
					gestiones:</p>
					<ul>
						<li>
						Planeamiento conceptual del
						proyecto</li>
						<li>Dirección fase anteproyecto</li>
						<li>Dirección proyecto definitivo</li>
						<li>Gestión de licencia, permisos y
						factibilidades de servicios</li>
						<li>Estructuración de líneas base de
						costo y cronograma</li>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->

    <?php get_footer(); ?>