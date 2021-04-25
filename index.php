<?php get_header(); ?>
   
<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/banner/1.jpg" alt="banner">
                
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/banner/2.jpg" alt="banner">
               
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/banner/3.jpg" alt="banner">
               
            </div>
			 <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/banner/4.jpg" alt="banner">
               
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>
<!-- banner end -->

<!-- types torres -->
<div class="bloq wow  delay-04s edificios" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/assets/img/property.jpg);  margin-top:-15px; min-height: 100%; 	  background-repeat: no-repeat;
    background-size: 100% 100%;" id="projects">
</div>
<!-- types torres end -->
<!-- fondo azul -->
<div class="testimonial  wow fadeInUp delay-04s" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/assets/img/fondo-azul.jpg);     background-size: cover;">
 <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1>SOMOS AJM</h1>
                    </header>
					<p>Nuestra trayectoria nos ha permitido saber que <br/>buenos resultados se aseguran con un recurso humano <br/> especializado, trabajo en equipo y una gestión óptima de tiempo.</p>
					<p>Somos un equipo que se convierte en tu partner.</p>
					<br/>
                     <a href="<?php echo get_permalink(get_page_by_path('nosotros')); ?>"><p class="btn-concordia">CONÓCENOS MÁS</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fondo azul end -->

<!-- services start -->
<div class="services content-area-20 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>¿EN QUÉ TE AYUDAMOS?</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-2 wow fadeInLeft delay-04s" style="border-left:none;">
              <a href="<?php echo get_permalink(get_page_by_path('gestion-del-diseno')); ?>">  <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/gestion.png" class="widthimg">
                <h5>GESTIÓN <br/>DEL DISEÑO</h5></a>
               
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-1 wow fadeInUp delay-04s">
               <a href="<?php echo get_permalink(get_page_by_path('gestion-de-adquisiciones')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/adquisiciones.png" class="widthimg">
                <h5>GESTIÓN DE ADQUISICIONES</h5></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-3 wow fadeInDown delay-04s">
               <a href="<?php echo get_permalink(get_page_by_path('gestion-de-construccion')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/construccion.png" class="widthimg">
                <h5>GESTIÓN DE LA CONSTRUCCIÓN</h5></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 wow fadeInRight delay-04s">
               <a  href="<?php echo get_permalink(get_page_by_path('consultorias')); ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/consultorias.png" class="widthimg">
                <h5>CONSULTORÍAS</h5></a>
            </div>
			
			<div class="col-lg-12 col-md-12 col-sm-12  wow fadeInRight delay-04s" id="clients">
                <a href="<?php echo get_permalink(get_page_by_path('gestion-del-diseno')); ?>"><p class="btn-concordia">VER MÁS</p></a>
            </div>
        </div>
    </div>
</div>
<!-- services end -->
<div class="testimonial  wow fadeInUp delay-04s parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory');?>/assets/img/fondo-paralax.jpg" >
 <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1>ALGUNAS DE LAS MARCAS <br/> QUE CONFÍAN EN NOSOTROS</h1>
                    </header>
                   <div class="row">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/clientes.png" class="clienteslogo" style="width:80%; height:auto; margin: 0 auto; ">
				   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>NUESTROS PROVEEDORES</h1>
        </div>
		
		
					
        <div class="row">
		   <div class="col-lg-12 col-md-12 col-sm-12  wow fadeInUp delay-04s">
				<div class="owl-carousel owl-theme">
<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-1.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-2.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-3.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-4.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-5.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-6.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-7.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-8.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-9.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-10.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-11.png" alt="banner">
					</div>
					<div class="item">
						<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/brands/client-12.png" alt="banner">
					</div>
</div>
<div class="owl-theme">
        <div class="owl-controls">
            <div class="custom-nav owl-nav"></div>
        </div>
    </div>
			</div>
        </div>
    </div>
</div>
<!-- contacto -->
<div class="testimonial  wow fadeInUp delay-04s" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/assets/img/fondo-contacto.jpg);     background-size: cover;" id="contact">
 <div class="container">
        <div class="row">
           <div class="col-lg-6 col-md-6 col-md-6">
		   
				<h2 style="text-align:left; color:white;">SOMOS PARTE DE TU EQUIPO</h2>
				<p style="text-align:left;">DÉJANOS TU CONSULTA</p>
                <form class="contact__form" method="post" action="mail.php">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" name="phone" class="form-control" placeholder="Teléfono">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Mensaje*"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn" style="text-align:right;">
                                <button type="submit" class="btn btn-color btn-md btn-message">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class=" offset-lg-2 col-lg-4 offset-md-2 col-md-5">
                <div class="contact-info">
                  
                    <div class="media">
                        <div class="media-body">
                            <h6 class="mt-0" >Teléfono</h6>
                            <p href="tel:+51 940-424-002" style="text-align:left;">+51 940-424-002   |   (01) 644-94-58</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h6 class="mt-0">Email</h6>
                            <p  style="text-align:left;"><a href="mail:hola@ajmgrupo.com">hola@ajmgrupo.com</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <div class="media-body">
                            <h6 class="mt-0">Dirección</h6>
                            <p  style="text-align:left;"> <a target="_blank" href="https://www.google.com/maps/place/Av.+José+Pardo+223,+Lima+15074/@-12.1192616,-77.0328428,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c8182b1e0fd9:0x86d3b1de02f788ab!8m2!3d-12.1192616!4d-77.0306487" >
						 Av. José Pardo 223 P.10 - Miraflores</a></p>
                        </div>
                    </div>
					 <a href="https://www.google.com/maps/place/Av.+José+Pardo+223,+Lima+15074/@-12.1192616,-77.0328428,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c8182b1e0fd9:0x86d3b1de02f788ab!8m2!3d-12.1192616!4d-77.0306487" >
						 <button type="submit" class="btn btn-color btn-md btn-message">
							VER EN GOOGLES MAPS
					 </button></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>