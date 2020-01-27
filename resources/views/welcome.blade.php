<?php


 // VALOR DEL DOLAR EN PERU
$dolarpe='https://deperu.com/api/rest/cotizaciondolar.json';
 $dolarpe_json=file_get_contents($dolarpe);
 $dolarpe_cadena=json_decode($dolarpe_json,true);

 $preciodolarpe=round($dolarpe_cadena['cotizacion'][0]['Venta'],2);
 
 // VALOR DEL DOLAR EN VENEZUELA
 $dolarven='https://s3.amazonaws.com/dolartoday/data.json';

    $dolar_json=file_get_contents($dolarven);
    $ae=utf8_encode ($dolar_json );
    $dolarve_cadena=json_decode($ae,true);
    $preciodolar=$dolarve_cadena['USD']['dolartoday'];


   // var_dump($dolarve_cadena);
    
 // CALCULO DEL PRECIO DE TRANSFERENCIA
$alfa=(1/$preciodolarpe)/1.09;
$beta=round(($preciodolar*$alfa),0);

?>

<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flesoj</title>
        
        <!-- Fonts -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
       
        <!-- Styles -->
        <style>
            html, body {
                background-color: skyblue;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div style="margin-left:20px;"><h1><u><i>Dolar Today:</i></u> <?php  echo $preciodolar. " BsS";?> </h1></div>
        <div style="margin-left:20px;"><h1><u><i>Precio Transferencia:</i> <?php  echo $beta. " BsS";?></h1></div>
            
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Yosmarter
                </div>

                <div class="links">
                    <a href="/view">Productos</a>
                    <a href="/clientes">Cliente</a>
                    
                    <input type="button" value="Dale" onclick="play()">
                </div>
            </div>
        </div>
    </body>
</html>
