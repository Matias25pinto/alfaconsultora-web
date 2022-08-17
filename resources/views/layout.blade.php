<!DOCTYPE html>
<html lang="es">
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="alfaconsultora, consultora, mic, aduanas, digesa, senacsa, senave, dinavisa, inan, mades" />
    <meta name="description" content="Somos una consultora innovadora adaptada a los cambios constantes del mercado y entes reguladores, capaz de enfrentar los desafíos actuales con profesionalismo." />
    <meta name="author" content="www.alfaconsultora.com.py" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="-FVY5iuGYdskUbP-vHuRvVzciFAfHJcxeH9BnRybcw4" />

    <!-- Title -->
    <title>Alfa - Consultora</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico?v=1.4" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="css/bootstrap.min.css?v=1.4" rel="stylesheet" type="text/css" />

    <!--== fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Livvic:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--== animate -->
    <link href="css/animate.css?v=1.4" rel="stylesheet" type="text/css" />

    <!--== line-awesome -->
    <link href="css/line-awesome.min.css?v=1.4" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="css/magnific-popup.css?v=1.4" rel="stylesheet" type="text/css" />

    <!--== owl.carousel -->
    <link href="css/owl.carousel.css?v=1.4" rel="stylesheet" type="text/css" />

    <!--== lightslider -->
    <link href="css/lightslider.min.css?v=1.4" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="css/base.css?v=1.4" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="css/shortcodes.css?v=1.4" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="css/spacing.css?v=1.4" rel="stylesheet" type="text/css" />

    <!--== style -->
    <link href="css/style.css?v=1.5" rel="stylesheet" type="text/css" />

    <!-- inject css end -->

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="clear-loader d-flex align-items-center justify-content-center">
            <div class="loader">
                <span class="plus"></span>
                <span class="plus"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>

    <!-- preloader end -->

    <!--body content start-->

    <div class="page-content">

        @yield('content')

    </div>

    <!--body content end-->


    <!--footer start-->

    <footer class="footer light-bg">
        <div class="primary-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-12 white-bg p-4 p-md-6">
                        <a class="footer-logo" href="{{route('index')}}">
                            <img id="footer-logo" class="img-fluid" src="images/logo.png?v=1.4" alt="">
                        </a>
                        <p class="my-4">Un equipo de consultores técnicos comprometidos y reconocidos en el ámbito de asuntos regulatorios brindando resultados solidos satisfactorios a las necesidades del cliente.</p>
                        <div class="social-icons social-colored footer-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="lab la-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="lab la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 p-4 p-md-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12 mt-6 mt-sm-0">
                                <h4 class="mb-4">Servicios</h4>
                                <div class="footer-list">
                                    <ul class="list-unstyled">
                                        <li><a href="pathologycam-testing.html">Dirección Técnica</a>
                                        </li>
                                        <li><a href="biochemistry-solution.html">Aseguramientos de Calidad</a>
                                        </li>
                                        <li><a href="chemical-research.html">Habilitaciones de Establecimiento</a>
                                        </li>
                                        <li><a href="pharmaceutical-research.html">Registros Sanitarios</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 mt-6 mt-md-0">
                                <h4 class="mb-4">Contactos</h4>
                                <div class="footer-cntct my-4">
                                    <ul class="media-icon list-unstyled">
                                        <li> <i class="flaticon-hospital"></i>
                                            <p class="mb-0">Asunción - Paraguay</p>
                                        </li>
                                        <li><i class="flaticon-medical-report"></i>  <a href="mailto:cinthiaocampos@alfaconsultora.com.py">cinthiaocampos@alfaconsultora.com.py</a>
                                        </li>
                                        <li><i class="flaticon-medical-assistance"></i>  <a href="tel:+595981823921">0981 823 921</a>
                                        </li>
                                        <li><i class="flaticon-working-hours"></i>
                                            <p class="mb-0">Lunes a Viernes: 9.30am a 7.00pm</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="copyright p-4 white-bg mt-5 ms-md-n6">Copyright © {{ now()->year }} All rights reserved | Alfa Consultora Integral
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--footer end-->


</div>


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-location-arrow"></i></a></div>

<!--back-to-top end-->


<!-- inject js start -->

<!--== jquery -->
<script src="js/theme.js?v=1.4"></script>

<!--== theme-plugin -->
<script src="js/theme-plugin.js?v=1.4"></script>

<!--== theme-script -->
<script src="js/theme-script.js?v=1.4"></script>

<!-- inject js end -->

<!-- Animación de toggle del nav del menu móvil -->
<script type="module">

</script>

</body>

</html>
