<?php
/**
* Template Name: Pagina de Gestion 3
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
             <div class="offset-md-2 col-lg-2 col-md-2 col-sm-2  s-brd-2 wow fadeInLeft delay-04s" style="border-left:none;">
               <a href="<?php echo get_permalink(get_page_by_path('gestion-del-diseno')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/1.png" class="widthimg100"> </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 s-brd-1 wow fadeInUp delay-04s">
                <a href="<?php echo get_permalink(get_page_by_path('gestion-de-adquisiciones')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/2.png" class="widthimg100"></a>
            </div>
            <div class="col-lg-2 ccol-md-2 col-sm-2  s-brd-3 wow fadeInDown delay-04s">
               <a href="<?php echo get_permalink(get_page_by_path('gestion-de-construccion')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-btn/3-active.png" class="widthimg100"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2   wow fadeInRight delay-04s">
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
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/service-photo/3.png" style="width:100%; height:auto; margin: 0 auto;">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-text">
				<p>
						En función a los lineamientos y objetivos del patrocinador, comprende en administrar los
recursos y direccionar el proyecto, evitando en lo máximo, posibles desviaciones en costo,
tiempo y alcance. Ello, implica gestionar de forma estratégica el contrato de obra durante todo
el desarrollo de la fase construcción. En ese sentido, definimos dos líneas marcadas de servicio,
las cuales son:
					</p>
					<p>Gerencia de proyectos y/o
					Supervisión de obra
					Por consiguiente, comprende en
					consolidar las siguientes gestiones:</p>
					</ul>
					<ul>
					
					<li> Administración del contrato</li>
					<li> Gerencia de procuras administradas
					por el cliente</li>
					<li> Garantizar y evitar posibles
					desviaciones en los alcances
					estructurados y establecidos</li>
					<li> Garantizar y evitar posibles
					desviaciones en los costos previstos
					para la fase construcción</li>
					<li>Garantizar y evitar posibles
					desviaciones en los plazos
					establecidos como compromiso</li>
					<li>Análisis de interesados y riesgos</li>
					<li>Aseguramiento de la calidad y
					seguridad en obra</li>
					<li>Estructuración y desarrollo de
					estrategias defensivas ante posibles
					desviaciones de costo, tiempo y
					alcances</li>
					<li>Cierre de Obra: Liquidación técnica y
					financiera de la obra </li>
						
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->


    <?php get_footer(); ?>