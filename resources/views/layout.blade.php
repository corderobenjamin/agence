<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Agence Interativa</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.min.css')}}" />
        @yield('css')
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Barra de Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><i class="fa fa-home"></i> Agence</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#"><i class="fa fa-suitcase"></i> Projetos</a></li>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil-square-o"></i> Administrativo</a></li>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users"></i> Comercial</a></li>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i> Financiero</a></li>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Usuario </a></li>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li>
                            <a href="#">Salir <i class="fa fa-sign-out"></i></a></li>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
            <a data-url="{{ url('/') }}" style="display:none;" id="raiz"></a>

        </div>

        <script src="{{ asset('js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-multiselect.min.js')}}"></script>
        <script src="{{ asset('js/chart.min.js')}}"></script>
        <script src="{{ asset('js/scripts.js')}}"></script>

    </body>
</html>
