<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <div ><h1>index</h1></div>
    <ul>
        <div>show</div>
        <form action="/clientes/{{$cliente->id}}" method="POST">
            <table border="solid 2px">
                <tr>
                    <td><label for="id">ID</label></td>
                    <td><label for="nombre">NOMBRE</label></td>
                    <input type="hidden" name="_method" value="PATCH">
                </tr>
                <tr>
                <td> <input type="text" name="id" value="{{$cliente->id}}"  id=""></td>
                    <td><input type="text" name="nombre" value="{{$cliente->nombre_cli}}"id=""></td>
                    <td><input type="submit" value="Actualizar"></td>
                </tr>
            </table>
            {{ csrf_field() }}
        </form>
  
</ul>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>