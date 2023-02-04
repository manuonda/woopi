<!DOCTYPE html>
<html lang="es-AR">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Woopi – Web, Apps & Software Delivery – Software Factory Argentina</title>
    <meta name="description"
        content="Woopi es una empresa especializada en el desarrollo de software en la nube, el desarrollo web y el desarrollo de aplicaciones para Android y iOS. Además ofrece servicios de consultoría, hosting y devops.">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- aos css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linea-fonts.css') }}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- materialize popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialize.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
    <!-- Rs animations css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rs-animations.css') }}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/inc/custom-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/inc/custom-slider/css/preview.css') }}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-transitions.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MS8P04HVZZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MS8P04HVZZ');
    </script>
</head>

<body class="solution">
    <!-- Preloader area start here -->
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <!--End preloader here -->
    <!--Full width header Start-->
    <div class="full-width-header header-style2">

        <!-- Toolbar Start -->
        @include('template.toolbar')
        <!-- Toolbar End -->

        <!--Header Start-->
        @include('template.header')
        <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Main content Start -->
    <div class="main-content">

        <!-- Slider Start -->
        <div id="rs-slider" class="rs-slider slider13">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="1"
                data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1"
                data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-lg-device="1"
                data-md-device-nav="true" data-md-device-dots="false">
                <!-- Slide 1 -->
                <div class="slider">
                    <div class="container">
                        <div class="slider-content">
                            <div class="sl-sub-title wow fadeInLeft" data-wow-delay="300ms"
                                data-wow-duration="2000ms">Desarrollo de Software</div>
                            <h1 class="sl-title wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="2000ms">
                                INGENIO CREATIVO</h1>
                            <div class="wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <span class="sl-sub-title2">AL SERVICIO DE TUS IDEAS</span>
                            </div>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 slide-quote touch" href="#rs-contact">EMPECEMOS</a>
                            </div>
                        </div>
                        <div class="image-part">
                            <img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"
                                src="assets/images/slider/solution/slider-01.png" alt="Images">
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slider">
                    <div class="container">
                        <div class="slider-content">
                            <div class="sl-sub-title wow fadeInLeft" data-wow-delay="300ms"
                                data-wow-duration="2000ms">APPS, WEB Y DEVOPS</div>
                            <h1 class="sl-title wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="2000ms">
                                NUESTRA EXPERIENCIA</h1>
                            <div class="sl-bwow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <span class="sl-sub-title2">MARCA LA DIFERENCIA</span>
                            </div>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 slide-quote touch" href="#rs-contact">EMPECEMOS</a>
                            </div>
                        </div>
                        <div class="image-part">
                            <img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"
                                src="assets/images/slider/solution/slider-02.png" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider End -->

        <!-- Services Start -->
        <div class="rs-services style20 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title4 text-center mb-50">
                    <span class="sub-title new pb-10">ARQUITECTOS DEL SOFTWARE</span>
                    <h2 class="title title3">10 años de experiencia marcan la diferencia y garantizan el éxito</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="iconbox-area">
                                <div class="icon-part">
                                    <a href="#"><img class="dance_hover"
                                            src="assets/images/services/woopi/001-share.png" alt="IT Management"></a>
                                </div>
                                <div class="services-content">
                                    <h3 class="title"> <a href="services-single.html">IT Management</a></h3>
                                    <p class="services-txt">Emprendemos juntos ese proyecto que estas soñando y que sea
                                        realidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="iconbox-area">
                                <div class="icon-part">
                                    <a href="#"><img class="dance_hover"
                                            src="assets/images/services/woopi/002-cloud.png" alt="Cloud Services"></a>
                                </div>
                                <div class="services-content">
                                    <h3 class="title"> <a href="services-single.html">Cloud Services</a></h3>
                                    <p class="services-txt">Servicios basados en la nube, aplicaciones nativas y
                                        desarrollo web.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-mb-30">
                        <div class="services-item">
                            <div class="iconbox-area">
                                <div class="icon-part">
                                    <a href="#"><img class="dance_hover"
                                            src="assets/images/services/woopi/004-lock.png" alt="Data Security"></a>
                                </div>
                                <div class="services-content">
                                    <h3 class="title"> <a href="services-single.html">Data Security</a></h3>
                                    <p class="services-txt">Desarrollo a conciencia y las mejoras prácticas, al
                                        resguardo tuyo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <div class="services-item">
                            <div class="iconbox-area">
                                <div class="icon-part">
                                    <a href="#"><img class="dance_hover"
                                            src="assets/images/services/woopi/012-database.png" alt="Data Center"></a>
                                </div>
                                <div class="services-content">
                                    <h3 class="title"> <a href="services-single.html">Data Center</a></h3>
                                    <p class="services-txt">Servicios de hosting a medida, desde cloud servers hasta
                                        adhoc infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-link text-center mt-43 sm-mt-23">
                    Hagamos crecer tu negocio.<a href="services.html"> Empecemos</a>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style10 gray-bg5 pt-130 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                        <div class="sec-title4 mb-30">
                            <span class="sub-title new pb-10">¿QUIÉNES SON LOS WOOPIES?</span>
                            <h2 class="title pb-20">Desde microemprendimientos hasta empresas de primer nivel
                                internacional</h2>
                            <p class="margin-0">No hace falta que aparentemos: podemos mostrarte el camino que hicimos
                                para que veas que tu futuro está en las mejoras manos.</p>
                        </div>
                        <div id="accordion" class="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true">Aplicaciones móviles</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                    <div class="card-body">Desarrollo móvil en ReactNative y desarrollo nativo de
                                        aplicaciones para Android y iOS.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false">Desarrollo Web</a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">Aplicaciones del color que necesites: PHP, MySQL, HTML, CSS,
                                        SCSS, JS. Laravel, Node, ReactJS y más.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false">StartUp</a>
                                </div>
                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">Armamos el setup inicial para llevar a cabo tu idea. Nadie
                                        tiene la experiencia que tenemos nosotros. Somos honestos: si tu idea nos gusta
                                        y podemos acreditar que va a funcionar, construimos el barco y lo navegamos
                                        juntos.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="images-part">
                                <img src="assets/images/about/solutions/1.jpg" alt="Images">
                            </div>
                            <div class="rs-animations">
                                <div class="spinner dot">
                                    <img class="scale" src="assets/images/about/solutions/2.png" alt="Images">
                                </div>
                                <div class="spinner ball">
                                    <img class="dance2" src="assets/images/about/solutions/3.png" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner Section Start -->
            <div class="rs-partner modify2 pt-100 md-pt-40">
                <div class="container">
                    <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="5"
                        data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000"
                        data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false"
                        data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
                        data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false"
                        data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false"
                        data-ipad-device-dots2="false" data-md-device="5" data-lg-device="5"
                        data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item mb-5">
                            <a href="https://ypf.com" target="_blank"><img src="assets/images/partner/woopi/ypf.png"
                                    alt="YPF"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://www.roemmers.com.ar/" target="_blank"><img
                                    src="assets/images/partner/woopi/roemmers.png" alt="Roemmers"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://appanima.com/" target="_blank"><img
                                    src="assets/images/partner/woopi/anima.png" alt="Anima"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://es.wikipedia.org/wiki/Teatro_Broadway_(Buenos_Aires)"
                                target="_blank"><img src="assets/images/partner/woopi/broadway.png"
                                    alt="Broadway"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://fullshow.com.ar" target="_blank"><img
                                    src="assets/images/partner/woopi/fullshow.png" alt="Fullshow"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://www.nocitoconstructora.com.ar/" target="_blank"><img
                                    src="assets/images/partner/woopi/nocito.png" alt="Nocito"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://meemo.vet" target="_blank"><img
                                    src="assets/images/partner/woopi/meemo.png" alt="Meemo"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://www.systemscorp.com.ar/en/" target="_blank"><img
                                    src="assets/images/partner/woopi/systemscorp.png" alt="Systemscorp"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://besmart.technology/" target="_blank"><img
                                    src="assets/images/partner/woopi/besmart.png" alt="Besmart"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://www.revitalair.com/es/" target="_blank"><img
                                    src="assets/images/partner/woopi/revitalair.jpg" alt="Revitalair"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://www.biobarica.com/en/" target="_blank"><img
                                    src="assets/images/partner/woopi/biobarica.png" alt="Biobarica"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://www.amp.com.ar/" target="_blank"><img
                                    src="assets/images/partner/woopi/amp.png" alt="Amp"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://www.instagram.com/vitaemporium/?hl=en" target="_blank"><img
                                    src="assets/images/partner/woopi/vita-emporium.png" alt="Vita Emporium"></a>
                        </div>
                        <div class="partner-item mb-5">
                            <a href="https://dantedepietrosrl.com.ar/" target="_blank"><img
                                    src="assets/images/partner/woopi/dantex.png" alt="Dantex"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner Section End -->
        </div>
        <!-- About Section End -->

        <!-- Services Section Start -->
        <div id="rs-services" class="rs-services style14 it-solutions pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title4 text-center mb-50">
                    <span class="sub-title new pb-10">SERVICIOS DE EXCELENCIA</span>
                    <h2 class="title title3">Software en la nube, desarrollo web y desarrollo de apps</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style15/1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="#">Dessarrollo de Software</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-front">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="#">Dessarrollo de Software</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">Nuestras tecnologías favoritas: PHP, MySQL y Node. JS,
                                                ReactJS y ReactNative. HTML, CSS y SCSS.</p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon2 view-more" href="#">Ver Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style15/2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="#">Diseño Web</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-front">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="#">Diseño Web</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">Desarrollo completo de soluciones para la Web, desde
                                                el prototipado, pasando por el diseño, hasta su ejecución.</p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon2 view-more" href="#">Ver Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style15/3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="#">Soluciones Analíticas</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-front">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="#">Soluciones Analíticas</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">Para medir el éxito de tu proyecto, se necesita
                                                experiencia para saber qué medir y cómo.</p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon2 view-more" href="#">Ver Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style15/4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="#">Hosting & DevOps</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-front">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="#">Hosting & DevOps</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">Soluciones de Hosting Cloud y soluciones de
                                                arquitectura avanzada con AWS.</p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon2 view-more" href="#">Ver Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style15/5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="#">Diseño de Producto</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-front">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="#">Diseño de Producto</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">Tenés una idea? Convirtamos ese proyecto en realidad.
                                            </p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon2 view-more" href="#">Ver Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="assets/images/services/style15/6.png" alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="#">Sistemas Preexistentes</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-front">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="#">Sistemas Preexistentes</a></h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc">¿Ya tenés un desarrollo y necesitás mantenerlo o
                                                evolucionarlo? Comunicate con nosotros, podemos ayudarte.</p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon2 view-more" href="#">Ver Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->


        <!-- Portfolio Section Start -->
        <div id="rs-portfolio" class="rs-portfolio style2 solution bg42 pt-100 md-pt-70">
            <div class="container">
                <div class="sec-title4 text-center">
                    <span class="sub-title white-color pb-15">Portfolio</span>
                    <h2 class="title white-color">Proyectos Recientes</h2>
                </div>
                <div class="slider-part">
                    <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3"
                        data-margin="20" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000"
                        data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false"
                        data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
                        data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false"
                        data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false"
                        data-ipad-device-dots2="true" data-md-device="3" data-lg-device="3"
                        data-md-device-nav="false" data-md-device-dots="true">
                        <div class="portfolio-wrap">
                            <div class="img-part">
                                <a href="blop.php"><img src="assets/images/project/woopi/blop.jpg"
                                        alt="Blop"></a>
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="blop.php">Blop</a></h3>
                                <span class="categories"><a>Development</a></span>
                            </div>
                        </div>
                        <div class="portfolio-wrap">
                            <div class="img-part">
                                <a href="yvector.php"><img src="assets/images/project/woopi/yvector.jpg"
                                        alt="YPF Y-Vector"></a>
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="yvector.php">YPF Y-Vector</a></h3>
                                <span class="categories"><a>Development</a></span>
                            </div>
                        </div>
                        <div class="portfolio-wrap">
                            <div class="img-part">
                                <a href="rcta.php"><img src="assets/images/project/woopi/rcta.jpg"
                                        alt="RCTA"></a>
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="rcta.php">RCTA</a></h3>
                                <span class="categories"><a>Development</a></span>
                            </div>
                        </div>
                        <div class="portfolio-wrap">
                            <div class="img-part">
                                <a href="eventicket.php"><img src="assets/images/project/woopi/eventicket.jpg"
                                        alt="Eventicket"></a>
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="eventicket.php">EventTicket</a></h3>
                                <span class="categories"><a>Development</a></span>
                            </div>
                        </div>
                        <div class="portfolio-wrap">
                            <div class="img-part">
                                <a href="jacaranda.php"><img src="assets/images/project/woopi/jacaranda.jpg"
                                        alt="Jacarandá"></a>
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="jacaranda.php">Jacarandá Salud</a></h3>
                                <span class="categories"><a>Development</a></span>
                            </div>
                        </div>
                        <div class="portfolio-wrap">
                            <div class="img-part">
                                <a href="anima.php"><img src="assets/images/project/woopi/anima.jpg"
                                        alt="Ánima"></a>
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="anima.php">Ánima</a></h3>
                                <span class="categories"><a>Development</a></span>
                            </div>
                        </div>
                        <div class="portfolio-wrap">
                            <div class="img-part">
                                <a href="tigres.php"><img src="assets/images/project/woopi/tigres.jpg"
                                        alt="Tigres"></a>
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="tigres.php">Tigres E-commerce</a></h3>
                                <span class="categories"><a>Development - IT Technology</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Section End -->
        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team style2 modify1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title5 text-center mb-50 md-mb-35">
                    <span class="sub-title new-title pb-7">Nuestros Expertos</span>
                    <h2 class="title title2 pb-12">Los miembros del equipo</h2>
                    <p class="description solutions">
                        Años de experiencia trabajando para empresas de renombre y brindando asesoramiento y servicio a
                        empresas de todos los niveles
                    </p>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="100"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false"
                    data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true"
                    data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true"
                    data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true"
                    data-md-device="1" data-md-device-nav="false" data-md-device-dots="true" data-lg-device="2">
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a><img src="assets/images/team/seo/sergio.jpg" alt="Sergio de Pietro"></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a>Sergio de Pietro</a></h4>
                            <span class="designation">Co-Founder / Backend Leader</span>
                            <ul class="team-social">
                                <li><a href="https://twitter.com/planetasergio"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/sergio-de-pietro/"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a><img src="assets/images/team/seo/seba.jpg" alt="Sebastián Torres"></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a>Sebastián Torres</a></h4>
                            <span class="designation">Co-Founder / Frontend Leader</span>
                            <ul class="team-social">
                                <li><a href="https://twitter.com/BastianTowers"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/sebastin-torres-9540a956/"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section End -->
        <!-- Testimonial Section Start -->
        <div class="rs-testimonial style10 modify1 bg43  pt-100 pb-140 md-pt-70">
            <div class="container">
                <div class="sec-title5 text-center">
                    <span class="sub-title white-color pb-10">NUESTRO HISTORIAL</span>
                    <h2 class="title pb-20 white-color">Testimonios</h2>
                </div>
                <div class="slick-part single-product-slider">
                    <div class="slider slider-for">
                        <div class="images-slide-single">
                            <div class="single-testimonial">
                                <div class="content-part">
                                    <img class="quote" src="assets/images/testimonial/quote-h16.png" alt="Image">
                                    <p>Son un hallazgo. Tienen una particularidad muy poco común: Respetan los
                                        compromisos, cumplen con los tiempos de entrega y sobre todo se comprometen con
                                        el resultado del proyecto. Son prácticos y versátiles y lo que no pueden
                                        resolver lo averiguan. Más que un proveedor un partner estratégico.</p>
                                </div>
                            </div>
                        </div>
                        <div class="images-slide-single">
                            <div class="single-testimonial">
                                <div class="content-part">
                                    <img class="quote" src="assets/images/testimonial/quote-h16.png" alt="Image">
                                    <p>‘Woopi’ entendió perfectamente qué necesitaba mostrar ‘Vita Emporium’ a sus
                                        clientes tanto en el logo con en el sitio web. ¡Lo recomiendo!</p>
                                </div>
                            </div>
                        </div>
                        <div class="images-slide-single">
                            <div class="single-testimonial">
                                <div class="content-part">
                                    <img class="quote" src="assets/images/testimonial/quote-h16.png" alt="Image">
                                    <p>‘Woopi’ entendió perfectamente qué necesitaba la radio y sugirió ideas positivas
                                        que ayudaron a mejorar el producto final. Estamos muy satisfechos con el diseño
                                        de nuestro sitio web.</p>
                                </div>
                            </div>
                        </div>
                        <div class="images-slide-single">
                            <div class="single-testimonial">
                                <div class="content-part">
                                    <img class="quote" src="assets/images/testimonial/quote-h16.png" alt="Image">
                                    <p>‘Woopi’ es una empresa muy confiable para enviar trabajos de calidad!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider slider-nav">
                        <div class="images-single">
                            <img src="assets/images/testimonial/avatar/francisco.jpg" alt="Francisco Gavio">
                            <div class="testi-content">
                                <div class="testi-name">Francisco Gavio</div>
                                <span class="testi-title">Co-Founder, Ánima</span>
                            </div>
                        </div>
                        <div class="images-single">
                            <img src="assets/images/testimonial/avatar/no-profile.jpg" alt="Roxana Levante">
                            <div class="testi-content">
                                <div class="testi-name">Roxana Levante</div>
                                <span class="testi-title">VitaEmporium CEO</span>
                            </div>
                        </div>
                        <div class="images-single">
                            <img src="assets/images/testimonial/avatar/maximiliano.jpg" alt="Maximiliano">
                            <div class="testi-content">
                                <div class="testi-name">Maximiliano</div>
                                <span class="testi-title">CTO, Radio Búnker Online</span>
                            </div>
                        </div>
                        <div class="images-single">
                            <img src="assets/images/testimonial/avatar/juanpablo.jpg" alt="Juan Pablo Elbusto">
                            <div class="testi-content">
                                <div class="testi-name">Juan Pablo Elbusto</div>
                                <span class="testi-title">CEO, Levex</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->
        <!-- Blog Section Start -->
        <div id="rs-blog" class="rs-blog style4 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row y-middle mb-53 md-mb-40 sm-mb-50">
                    <div class="col-md-6 sm-mb-20">
                        <div class="sec-title">
                            <span class="sub-title primary right-line">ENTRADAS DEL BLOG</span>
                            <h2 class="title mb-0">Análisis y experiencias</h2>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
            <div class="btn-part text-right sm-text-left">
                <a class="readon2 submit-btn con-btn" href="blog-single.html">Ver Más</a>
            </div>
        </div> -->
                </div>
                <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false"
                    data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                    data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
                    data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                    data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="true">
                    <div class="blog-item">
                        <div class="blog-wrap">
                            <div class="img-part">
                                <a href="redireccion-automatica.php"><img src="assets/images/blog/woopi/blog1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-content">
                                <a class="categories" href="redireccion-automatica.php">Development</a>
                                <h3 class="title"><a href="redireccion-automatica.php">Redireccionar automáticamente
                                        a https desde .htaccess</a></h3>
                                <div class="blog-meta">
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 29 Sep 2018
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-wrap">
                            <div class="img-part">
                                <a href="couchDB.php"><img src="assets/images/blog/woopi/blog2.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-content">
                                <a class="categories" href="couchDB.php">Development</a>
                                <h3 class="title"><a href="couchDB.php">CouchDB exploit: vulnerabilidad y ejecución
                                        remota</a></h3>
                                <div class="blog-meta">
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 19 Sep 2018
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-wrap">
                            <div class="img-part">
                                <a href="#"><img src="assets/images/blog/woopi/blog3.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <a class="categories" href="trabajando-iconfonts.php">Development</a>
                                <h3 class="title"><a href="trabajando-iconfonts.php">Trabajando con Icon Fonts</a>
                                </h3>
                                <div class="blog-meta">
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 19 Ago 2015
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Blog Section End -->
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <!-- Contact Section Start -->
        <div id="rs-contact" class="rs-contact style5 modify1 gray-bg5">
            <div class="container">
                <div class="contact-us pt-100 pb-100 md-pt-70 md-pb-70">
                    <div class="row margin-0">
                        <div class="col-lg-8 padding-0">
                            <div class="contact-widget">
                                <div class="sec-title5 mb-50 md-mb-30">
                                    <span class="sub-title new-title pb-8">Contacto</span>
                                    <h2 class="title title2">Escribinos</h2>
                                </div>
                                <div id="form-messages" class="alert"></div>
                                <form id="contact-form" method="post" action="includes/send-mail.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="nombre"
                                                    name="nombre" placeholder="Nombre Completo *" required="">
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email"
                                                    name="email" placeholder="E-Mail *" required="">
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="telefono"
                                                    name="telefono" placeholder="Teléfono *" required="">
                                            </div>
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="website"
                                                    name="website" placeholder="Sitio Web">
                                            </div>

                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="mensaje" name="mensaje" placeholder="Tu Mensaje *" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <div class="form-group mb-0">
                                                <!--<input id="submit-btn" class="readon2 submit-btn con-btn" type="submit" value="Enviar">-->
                                                <button class="g-recaptcha readon2 submit-btn con-btn"
                                                    data-sitekey="6Ld5lxobAAAAAPpmltGzOYQPCQ26fq0Ja5OUr6Gl"
                                                    data-callback='submitContactForm'
                                                    data-action='submit'>Enviar</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 padding-0">
                            <div class="contact-box h-100">
                                <div class="sec-title2 mb-50 md-mb-30">
                                    <h2 class="title small white-color">Información</h2>
                                </div>
                                <div class="address-box mb-25">
                                    <div class="box-icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <div class="address-text">
                                        <span class="label">Argentina</span>
                                        <p class="desc">
                                            RIO DE JANEIRO 83 PB C CIUDAD DE BUENOS AIRES ,<br>
                                            Argentina.
                                        </p>
                                    </div>
                                </div>
                                <div class="address-box mb-25">
                                    <div class="box-icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="address-text">
                                        <span class="label">Teléfono</span>
                                        <p class="desc">
                                            <a href="tel:63856945">63856945</a><br>
                                        </p>
                                    </div>
                                </div>
                                <div class="address-box mb-25">
                                    <div class="box-icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="address-text">
                                        <span class="label">E-mail </span>
                                        <p class="desc">
                                            <a href="mailto:info@woopi.com.ar">info@woopi.com.ar</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="address-box">
                                    <div class="box-icon">
                                        <i class="flaticon-clock"></i>
                                    </div>
                                    <div class="address-text">
                                        <span class="label">Horario de atención </span>
                                        <p class="desc">
                                            Lun-Vie: 10:00-16:00
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->
        <script>
            function onSubmit(token) {
                document.getElementById("demo-form").submit();
            }
        </script>


    </div>
    <!-- Main content End -->

    @include('template.footer')

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->


    <!-- Search Modal Start -->
    <div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
        aria-hidden="true">
        <button type="button" class="close" data-bs-dismiss="modal">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->


    <!-- modernizr js -->
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }} "></script>
    <!-- jquery latest version -->
    <script src="{{ asset('assets/js/jquery.min.js') }} "></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
    <!-- Menu js -->
    <script src="{{ asset('assets/js/rsmenu-main.js') }} "></script>
    <!-- op nav js -->
    <script src="{{ asset('assets/js/jquery.nav.js') }} "></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }} "></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/js/slick.min.js') }} "></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }} "></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }} "></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.min.js') }} "></script>
    <!-- materialize js -->
    <script src="{{ asset('assets/js/materialize.min.js') }} "></script>
    <!-- aos js -->
    <script src="{{ asset('assets/js/aos.js') }} "></script>
    <!-- Skill bar js -->
    <script src="{{ asset('assets/js/skill.bars.jquery.js') }} "></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }} "></script>
    <!-- counter top js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }} "></script>
    <!-- video js -->
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }} "></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }} "></script>
    <!-- Nivo slider js -->
    <script src="{{ asset('assets/inc/custom-slider/js/jquery.nivo.slider.js') }} "></script>
    <!-- plugins js -->
    <script src="{{ asset('assets/js/plugins.js') }} "></script>
    <!-- contact form js -->
    <script src="{{ asset('assets/js/contact.form.js') }} "></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }} "></script>

    <!--
        <script>
            document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
                ':35729/livereload.js?snipver=1"></' + 'script>')
        </script>
        -->

</body>

</html>
