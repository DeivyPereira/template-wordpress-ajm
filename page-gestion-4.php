<?php
/**
* Template Name: Pagina de Gestion 4
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
               <a href="<?php echo get_permalink(get_page_by_path('gestion-del-diseno')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/1.png" class="widthimg100"> </a>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 s-brd-1 wow fadeInUp delay-04s">
                <a href="<?php echo get_permalink(get_page_by_path('gestion-de-adquisiciones')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/2.png" class="widthimg100"></a>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6  s-brd-3 wow fadeInDown delay-04s">
               <a href="<?php echo get_permalink(get_page_by_path('gestion-de-construccion')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/3.png" class="widthimg100"></a>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6  wow fadeInRight delay-04s">
               <a href="<?php echo get_permalink(get_page_by_path('consultorias')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/4-active.png" class="widthimg100"></a>
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
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-photo/4.png" style="width:100%; height:auto; margin: 0 auto;">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-text">
                    <p>Las asesorías comprenden en
					brindar servicios expresos de
					índoles de gerencia de proyectos
					de construcción en función al
					requerimiento específico del
					cliente. Por ello, implican los
					siguientes servicios:</p>
					<ul>
					<li> Asesorías de índoles de
					gerencia de proyectos de
					construcción</li>
					<li> Asesorías técnicas y
					económicas para evaluar
					proyectos de construcción</li>
					<li> Estructuración de líneas
					base de costo y cronograma</li>
					<li> Auditoría de desviación de
					costos</li>
					<li> Entre otros afines</li>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>