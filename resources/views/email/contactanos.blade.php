<!DOCTYPE html>
<html lang="es">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="alfaconsultora, consultora, mic, aduanas, digesa, senacsa, senave, dinavisa, inan, mades" />
    <meta name="description" content="Somos una consultora innovadora adaptada a los cambios constantes del mercado y entes reguladores, capaz de enfrentar los desafíos actuales con profesionalismo." />
    <meta name="author" content="www.alfaconsultora.com.py" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--== fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Livvic:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!-- Title -->
    <title>Alfa - Consultora</title>
    <style>
        .container {
            margin: 0 auto;
            display:flex;
            justify-content:center;
            align-items: center;
            flex-direction: column;
            flex-wrap: nowrap;
            border-color: #A9BF04;
            border-width: 8px;
            border-style: solid;
            width: 50%;
            font-family: 'Livvic', sans-serif;
            font-weight: 400;
            line-height: 1.5;
            color: #454545;
            overflow-x: hidden;
            letter-spacing: 0.5px;
            padding: 1rem;
        }
        .content-img{
            text-align: center;
            margin: 0 auto;
            width: 100%;

        }
        .correo{
            margin: 0 auto;
            width: 100%;
        }
        h1{
            text-align: center;
            font-style: normal;
            font-size: 2rem;
        }
        h5{
            font-style: normal;
            font-size: 1rem;
            text-align: center;
        }
        p{
            font-style: normal;
            font-size: 1rem;
        }
        span{
            font-style: normal;
            font-size: 1rem;
        }
    </style>
</head>
<body>
<div class="content-img">
    <img src="https://www.alfaconsultora.com.py/images/logo.png?v=1.4" alt="logo">
</div>
<div class="container">
    <div class="correo">
        <h1>Correo de Contacto</h1>
        <p><span>Autor: </span> {{$data['name']}}</p>
        <p><span>Correo de contacto: </span> {{$data['email']}}</p>
        <p><span>Teléfono de contacto: </span> {{$data['phone']}}</p>
        <p><span>Mensaje: </span></p>
        <p>{{$data['message']}}</p>
        <h5>Copyright © {{ now()->year }} All rights reserved | Alfa Consultora Integral </h5>
    </div>

</div>
</body>
</html>
