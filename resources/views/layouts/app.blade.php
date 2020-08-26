<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ergo Test') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/ff740551c1.js" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
            <a class="navbar-brand my-auto mr-4" href="/">
                <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="" style="max-width: 60px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-1">
                            <form class="form-inline">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-light" style="border: 1px solid orange">
                                        <i class="fa fa-search "></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="alpukat, juice"
                                         aria-describedby="basic-addon1">
                                </div>
                            </form>
                        </li>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-3">
                            <a href="{{route('barangs.index')}}" class="font-weight-bolder text-success nav-link">Ergo Test</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="" class="font-weight-bolder text-success nav-link"><i class="fa fa-heart"></i> Favorit</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="/pesanan" class="font-weight-bolder text-success nav-link"><i class="fa fa-sticky-note"></i> Pesanan</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="" class="font-weight-bolder text-success nav-link"><i class="fa fa-bell"><span class='badge badge-pill'>2</span></i> Notification</a>
                        </li>
                        
                        <!-- Authentication Links -->
                        @guest

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-success" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user"></i> Akun <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                                
                            </div>
                        </li>

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-success" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 <i class="fa fa-user mr-1"></i> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li> 
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @yield('footer')
</body>

</html>