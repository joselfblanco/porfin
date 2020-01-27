<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Flesoj</title>
    <style>
  
    .form{
        width: 300px;
        margin: 0 auto;
    }
    </style>
</head>
<body>
<h1> hola cliente</h1>
<form action="/clientes" method="POST">
    <table style="border: solid 1px;">
    <tr>
    <td><label for="nombre">NOMBRE CLIENTE</label></td>
       <td></td>
    </tr>
    <tr>
    <td><input type="text" name="nombre" id=""></td>
        <td><input type="submit" value="ENVIAR"></td>
   @csrf
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    </tr>
    </table>

    </form>   
</body>
</html>