<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                     Touver mon juriste.com

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                 Creer mon compte </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
  <div class="container-fluid">
            <div class="row">
                <div class="col-2 my-2"> <img src="assets/images/balance.jpg" width="150px" height="80px" class="" alt=""> </div>
                <div class="col-8 "></div>
                <div class="col-2 my-5"><h5 class="fin">Numero vert:2311</h5></div>
            </div>
 </div>

<div class=" division">
    <div>

          <nav class="navbar navbar-light " style="background-color: #e3f2fd;">
            <!-- Navbar content -->
            <nav class=" container-fluid navbar navbar-expand-lg navbar-light bg-light">
                {{-- <a class="navbar-brand" href="#">Actualite Juridique</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class=" container-fluid" >
                  <ul class=" container-fluid navbar mr-auto">
                    {{-- <li class="nav-item active"> --}}
                      <a class="nav-link" href="#">Menu <span class="sr-only">Actualite Juridique</span></a>
                    {{-- </li>
                    <li class="nav-item"> --}}
                        <a class="nav-link" href="#">A propos</a>
                      {{-- </li>
                    <li class="nav-item"> --}}
                      <a class="nav-link" href="#">Contact</a>
                    {{-- </li>
                    <li class="nav-item dropdown"> --}}
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        services
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">CHAT</a>
                        <a class="dropdown-item" href="#">FORUM</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"></a>
                      </div>
                    {{-- </li>
                    <li class="nav-item"> --}}
                      <a class="nav-link disabled" href="#">Disabled</a>
                    {{-- </li> --}}
                  </ul>

                </div>
              </nav>
          </nav>

    </div>





        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
