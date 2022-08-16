@extends('layout')

@section('content')
    <!--header start-->
    <header id="site-header" class="header">
        <div id="header-wrap">
            <div class="container-fluid px-lg-8">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="{{route('index')}}">
                                <img id="logo-img" class="img-fluid" src="images/logo.png?v=1.4" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto me-auto position-relative">
                                    <!-- Inicio -->
                                    <li class="nav-item"> <a class="nav-link" href="#inicio">Inicio</a></li>
                                    <!-- Nosotros -->
                                    <li class="nav-item"> <a class="nav-link" href="#nosotros">Nosotros</a></li>
                                    <!-- Contactos -->
                                    <li class="nav-item"> <a class="nav-link" href="#contactos">Contactos</a></li>
                                    <!-- Login -->
                                    <li class="nav-item"> <a class="nav-link" href="{{route('login.index')}}">Login</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--header end-->

    <!--hero section start-->
    <section id="inicio"  class="banner p-0 pos-r fullscreen-banner">
        <div class="banner-slider owl-carousel no-pb" data-dots="false" data-nav="true">
            <div class="item hero-overlay" data-bg-img="images/bg/01_nuevo.jpg" data-overlay="6">
                <div class="align-center pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-10 col-12">
                                <h2 class="mb-4 text-black">Alfa <span class="text-theme">Consultora Integral</span></h2>
                                <p class="lead font-w-5 text-black">Un equipo de consultores técnicos comprometidos y reconocidos en el ámbito de asuntos regulatorios brindando resultados solidos satisfactorios a las necesidades del cliente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item hero-overlay" data-bg-img="images/bg/02_nuevo.jpg" data-overlay="6">
                <div class="align-center pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-10 col-12">
                                <h2 class="mb-4 text-black">Alfa <span class="text-theme">Consultora Integral</span></h2>
                                <p class="lead font-w-5 text-black">Proponer soluciones a nuestros clientes a través de exitosas gestiones de colaboradores con experiencia y dedicación en el rubro de asesoramiento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--hero section end-->
    <section id="nosotros">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 mt-2 text-center">
                    <h1 class="title">Alfa Consultora Integral</h1>
                    <p class="text-black font-w-5">www.alfaconsultora.com.py</p>
                </div>
            </div>
            <div class="row align-items-start justify-content-between">

                <div class="col-lg-4 col-12 mt-4">
                    <h2 class="title">¿Quiénes somos?</h2>
                    <p class="text-black font-w-5">Somos una consultora innovadora adaptada a los cambios constantes del mercado y entes reguladores, capaz de enfrentar los desafíos actuales con profesionalismo.</p>
                    <p>Contamos con un amplio plantel de técnicos integrado por  Ingenieros químicos, Farmacéutico, Ing. Agrónomo, Ing. Ambiental, Tecnólogo en alimentos, Administrador, Arquitecto, entre otros con la idea de brindar al cliente el servicio más completo de asesoramiento en asuntos regulatorios.</p>
                </div>

                <div class="col-lg-4 col-12 mt-4">
                    <h2 class="title">Especialidades</h2>
                    <ul class="list-unstyled list-icon mt-4">
                        <li class=""><i class="las la-check"></i>Productos fármacos</li>
                        <li class=""><i class="las la-check"></i>Productos Biológicos</li>
                        <li><i class="las la-check"></i>Cosméticos</li>
                        <li><i class="las la-check"></i>Productos domisanitarios de riesgo I</li>
                        <li><i class="las la-check"></i>Productos domisanitarios de riesgo II</li>
                        <li><i class="las la-check"></i>Dispositivos médicos</li>
                        <li><i class="las la-check"></i>Fito terapéuticos</li>
                        <li><i class="las la-check"></i>Suplementos dietarios</li>
                        <li><i class="las la-check"></i>Productos Alimenticios</li>
                        <li><i class="las la-check"></i>Tabacos y vapeadores</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 col-12">
                <div class="accordion" id="accordion">
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                VISIÓN
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                            <div class="accordion-body">Ser un equipo de consultores técnicos comprometidos y reconocidos en el ámbito de asuntos regulatorios brindando resultados solidos satisfactorios a las necesidades del cliente.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                MISIÓN
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                            <div class="accordion-body">Proponer soluciones a nuestros clientes a través de exitosas gestiones de colaboradores con experiencia y dedicación en el rubro de asesoramiento.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                VALORES
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                            <div class="accordion-body">Confidencialidad: toda información proveída por el cliente se mantiene con resguardo y prudencia.
                                Compromiso: el cliente puede estar confiado que sus gestiones se llevan con eficacia y consideración.
                                Diligencia: el tiempo y el esfuerzo aplicado en cada gestión es clave para cada cliente,
                                Trabajo en equipo: somos un grupo de profesionales que se complementan, pero a la vez se desenvuelven en sus áreas de manera eficaz</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--about end-->

    <!--client start-->

    <section class="pb-0">
        <div class="container">
            <div class="row text-center">
                <div class="section-title">
                    <h2 class="title">Entidades</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="owl-carousel no-pb" data-dots="false" data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="20" data-autoplay="true">
                        <div class="item">
                            <div class="client-logo">
                                <p class="text-black font-w-5 mb-3 text-center">DINAVISA</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-logo">
                                <p class="text-black font-w-5 mb-3 text-center">INAN</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-logo">
                                <p class="text-black font-w-5 mb-3 text-center">MADES</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-logo">
                                <p class="text-black font-w-5 mb-3 text-center">MIC</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-logo">
                                <p class="text-black font-w-5 mb-3 text-center">ADUANAS</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-logo">
                                <p class="text-black font-w-5 mb-3 text-center">DIGESA</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-logo">
                                <p class="text-black font-w-5 mb-3 text-center">SENACSA</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-logo">
                                <p class="text-black font-w-5 mb-3 text-center">SENAVE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--client end-->

    <!--call us start-->

    <section id="contactos" class="theme-bg py-5 m-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <h3 class="text-light">Llámenos su consulta no molesta</h3>
                </div>
                <div class="col-md-5 col-12 ms-auto mt-3 mt-lg-0">
                    <div class="d-flex align-items-start justify-content-end">
                        <div class="text-white text-end"> <span>Lunes a Viernes: 07:30am a 5:00pm</span>
                            <h3 class="font-w-4"><a class="text-decoration-underline text-white" href="tel:+595981823921">0981 823 921</a></h3>
                        </div> <span class="white-bg d-inline-block p-2 ms-4"><i class="las la-phone ic-3x text-theme"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--call us end-->




    <!--body content start-->

    <div class="page-content">

        <!--contact start-->

        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-12">
                        <div class="section-title">
                            <h2 class="title">Contactos</h2>
                            <p class="mb-0">¿Alguna pregunta o comentario? ¡Solo escríbenos un mensaje!</p>
                        </div>
                    </div>
                </div>
                @if (session('status'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                {{session('status')}}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row g-0">
                        <div class="col-lg-8">
                            <div class="contact-main white-bg shadow-sm p-5">
                                <form id="contact-form" class="row" method="POST" action="/">
                                    @csrf
                                    <div id="formmessage"></div>
                                    <div class="form-group col-md-6">
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Nombre" required="required" value="{{old('name')}}">
                                        @if ($errors->has('name'))
                                            <span class="badge bg-danger mt-2">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Correo" required="required" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="badge bg-danger mt-2">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="form_phone" type="number" name="phone" class="form-control" placeholder="Teléfono" required="required" value="{{old('phone')}}">
                                        @if ($errors->has('phone'))
                                            <span class="badge bg-danger mt-2">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select name="service" class="form-select form-control" required="required" value="{{old('select')}}">
                                            @foreach ($services as $service)
                                                <option value="{{ ($service == $services[0])?'':$service }}" @selected(old('service') == $service)>
                                                    {{ $service }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('service'))
                                            <span class="badge bg-danger mt-2">{{ $errors->first('service') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Mensaje" rows="3" required="required">{{old('message')}}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="badge bg-danger mt-2">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 text-center mt-4">
                                        <button type="submit" class="btn btn-theme"><span>Enviar Mensaje</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 dark-bg">
                            <div class="px-3 py-5 p-md-5 text-white">
                                <div class="contact-media mb-4">
                                    <h5 class="text-white">Dirección:</h5>
                                    <span>Asunción - Paraguay</span>
                                </div>
                                <div class="contact-media mb-4">
                                    <h5 class="text-white">Contactanos:</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">Teléfono: <a href="tel:+595981823921">0981 823 921</a>
                                        </li>
                                        <li>Email: <a href="mailto:themeht23@gmail.com"> correo@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-media mb-4">
                                    <h5 class="text-white">Horarios de Atención:</h5>
                                    <span>Lunes a Viernes: 07:30am a 5:00pm</span>
                                </div>
                                <div class="social-icons">
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
                        </div>
                    </div>
                @endif

            </div>
        </section>

        <!--contact end-->

        <!--map start-->

        <section class="p-0">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.303366908434!2d-57.50836628498785!3d-25.327599283835784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe490cab7bfae8939!2zMjXCsDE5JzM5LjQiUyA1N8KwMzAnMjIuMiJX!5e0!3m2!1ses!2spy!4v1656287564524!5m2!1ses!2spy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--map end-->
    </div>
    <!--body content end-->

    <!--Boton de whatsApp start -->
    <img class="btn-whatsapp" src="https://clientes.dongee.com/whatsapp.png?v=1.4" width="64" height="64" alt="Whatsapp" onclick="window.location.href='https://wa.me/595981823921?text=Hola!%20Estoy%20interesado%20en%20tu%20servicio'">
    <!--Boton de whatsApp end -->
@endsection
