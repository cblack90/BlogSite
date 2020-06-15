<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chris Black Blog</title>

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
        <nav class="navbar-menu has-shadow">
            <div class="navbar-start container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/Chris_Black_logo2.png')}}" alt="CBlack logo" width="218" height="300" />
                    </a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Blog</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Resources</a>
                </div>
                <div class="navbar-end is-right">
                    <!--  Not sure if I will end up using this sort of log in as I wont have other users  -->
                    @if(Auth::guest())
                        <a href="" class="navbar-item is-tab">Login</a>
                        <a href="" class="navbar-item is-tab">Sign up</a>
                    @else
                        <button class="dropdown is-aligned right navbar-item is-tab">
                            Hey Jimmy <span class="icon"><i class="fa fa-caret-dowm"></i></span>

                            <ul class="dropdown-menu">
                                <li><a href="">Profile</a></li>
                                <li><a href="">Notification</a></li>
                                <li><a href="">Settings</a></li>
                                <li class="seperator"></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
