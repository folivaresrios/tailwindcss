<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-brand-lightest h-screen">
    <div id="app">
        <nav class="bg-white h-12 shadow mb-8  text-lg font-light">
            <div class="container mx-auto h-full">
                <div class="flex items-center justify-center h-12">
                    <div class="ml-6">
                        <a href="{{ url('/') }}" class="no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right mr-6">
                        @guest
                            <a class="no-underline hover:text-grey-dark text-grey-darkest pr-3 text-sm no-underline" href="{{ url('/login') }}">Login</a>
                            <a class="no-underline hover:text-grey-dark text-grey-darkest text-sm" href="{{ url('/register') }}">Register</a>
                        @else
                            <span class="text-grey-darker text-sm pr-4">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"
                                class="no-underline hover:text-grey-dark text-grey-darkest text-sm"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
