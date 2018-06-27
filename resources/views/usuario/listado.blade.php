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
                    
                    @foreach ( $usuarios as $usuario )
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="thumbnail">
                        <?php $id = $usuario->id; ?>
                            <a href="/usuario/ $usuario->id ">
                                <img src="{{ $usuario->imagen }}" alt="{{ $usuario->imagen }}">
                            </a>
                            <div class="caption">
                                <h3>{{ ucfirst($usuario->nombre) }} {{ ucfirst($usuario->apellido) }}</h3>
                                <p>{{ ucwords($usuario->direccion) }}</p>
                                <p>{{ ucfirst($usuario->ciudad) }}</p>
                                <p>{{ ucfirst($usuario->estado) }}</p>
                               <a href="/usuario/ {{$id}} " class="btn btn-primary">Ver perfil completo</a>
                            </div>
                        </div>
                    </div>
                    @endforeach                    
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