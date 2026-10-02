<?php
$page_title = "SoundEvent - Producción de Eventos, Sonido e Iluminación Profesional";
$page_desc  = "SoundEvent: Especialistas en alquiler de sonido, iluminación profesional, DJ, escenarios y producción técnica para eventos y espectáculos.";
?>

<!DOCTYPE html>

<html lang="es">

    <!-- COMMON-HEAD -->
    <?php include "common-php/head.php"; ?>
    <!-- /COMMON-HEAD -->

    <body class="home">

        <!-- COMMON-HEADER -->
        <?php include "common-php/header/es.php"; ?>
        <!-- /COMMON-HEADER -->

        <!-- Hero -->
        <section id="slider" class="hero p-0 odd">
            <div class="swiper-container no-slider animation slider-h-100 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="assets/images/bg-1.jpg" alt="Full Image" class="full-image" data-mask="60">    

                        <div class="slide-content row">
                            <div class="col-12 d-flex justify-content-start inner">
                                <div class="left text-left">

                                    <!-- Content -->
                                    <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">
                                        <span class="pre-title m-0">Servicios Audiovisuales</span>
                                        ALQUILER DE SONIDO E ILUMINACIÓN
                                    </h1>
                                    <p data-aos="zoom-in" data-aos-delay="2400" class="description">Soluciones de sonido, iluminación profesional y servicios de DJ para eventos privados, bodas y actos corporativos, adaptados a cualquier espacio y necesidad.</p>

                                    <!-- Action -->
                                    <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                        <div class="d-sm-inline-flex">
                                            <a href="#contact" class="smooth-anchor mt-4 btn primary-button">CONTÁCTANOS</a>
                                            <a href="#single" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">LEER MÁS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- COMMON-SECTION-ABOUT -->
        <?php include "common-php/sections/es/about.php"; ?>
        <!-- /COMMON-SECTION-ABOUT -->

        <!-- COMMON-SECTION-PROCESS -->
        <?php include "common-php/sections/es/process.php"; ?>
        <!-- /COMMON-SECTION-PROCESS -->

        <!-- COMMON-SECTION-PRICING -->
        <?php include "common-php/sections/es/pricing.php"; ?>
        <!-- /COMMON-SECTION-PRICING -->

        <!-- COMMON-SECTION-TESTIMONIALS -->
        <?php include "common-php/sections/es/testimonials.php"; ?>
        <!-- /COMMON-SECTION-TESTIMONIALS -->

        <!-- COMMON-SECTION-CONTACT -->
        <?php include "common-php/sections/es/contact.php"; ?>
        <!-- /COMMON-SECTION-CONTACT -->

        <!-- COMMON-FOOTER -->
        <?php include "common-php/footer/es.php"; ?>
        <!-- /COMMON-FOOTER -->

        <!-- COMMON-SCRIPTS -->
        <?php include "common-php/body-scripts.php"; ?>
        <!-- /COMMON-SCRIPTS -->

    </body>
</html>