@extends('layout')

@section('content')

    <!--body content start-->

    <div class="page-content">

        <!--login start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center dark-bg">
                        <div class="p-lg-5 px-3 py-5">
                            <img class="img-fluid" src="images/login-img.png" alt="">
                            <div class="section-title mb-0 mt-5">
                                <h2 class="title">Bienvenido a Alfa Consultora Integral</h2>
                                <p class="mb-0 text-light">www.alfaconsultora.com.py</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 white-bg">
                        <div class="p-lg-5 px-3 py-5">
                            <h3 class="mb-4">Inicie sesión en su cuenta</h3>
                            <form id="contact-form" method="post" action="php/contact.php">
                                <div class="messages"></div>
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Usuario" required="required" data-error="Username is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input id="form_password" type="password" name="password" class="form-control" placeholder="Contraseña" required="required" data-error="password is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group mt-4 mb-5">
                                    <div class="remember-checkbox d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="remember" checked>
                                            <label class="form-check-label" for="remember">Recordar Usuario</label>
                                        </div> <a href="#">¿Has olvidado tu contraseña?</a>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-theme"><span>Iniciar sesión </span></a>
                            </form>
                            <div class="d-flex align-items-center mt-4"> <span class="text-black me-1">¿No tienes una cuenta?</span>
                                <a href="signup.html">Crear Cuenta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--login end-->

    </div>

    <!--body content end-->
@endsection

