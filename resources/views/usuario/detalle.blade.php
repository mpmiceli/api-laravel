<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Api Consumer</title>
    <meta name="viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">

                <!--ENCABEZADO DEL MENU-->
                <div class="navbar-header">
                    <h2 style="color:#fff; font-size: 30px;">Perfiles</h2>

                </div>

                <!--Galeria-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2 style="color: #fff; font-size: 30px; text-align: center;">Galeria</h2>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="thumbnail">
                            
                                <img src="{{ $usuario->imagen }}" alt="">
                            </a>
                            <div class="caption">
                                <h3>{{ ucfirst($usuario->nombre) }} {{ ucfirst($usuario->apellido) }}</h3>
                                <p>{{ ucwords($usuario->direccion) }}</p>
                                <p>{{ ucfirst($usuario->ciudad) }}</p>
                                <p>{{ ucfirst($usuario->estado) }}</p>
                                <p>{{ ucfirst($usuario->telefono) }}</p>
                                <p>{{ ucfirst($usuario->email) }}</p>

                                <a href="/listado" class="btn btn-primary">Volver</a>
                            </div>
                        </div>
                    </div>
                    
                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                </div>  
                            </div>
                        </div>
                    </footer>

        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>