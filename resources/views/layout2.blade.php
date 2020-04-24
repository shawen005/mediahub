<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel Ecommerce | @yield('title', '')</title>

         <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
         <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{asset('css/config.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{asset('css/colors/green.css') }}">

        @yield('extra-css')
    </head>


<body >
     <div class="wrapper">
    @include('partials.nav2')

    @yield('content')

    @include('partials.footer')
<script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/css_browser_selector.min.js') }}"></script>
        <script src="{{ asset('js/echo.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing-1.3.min.js') }}"></script>

        <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>
        <script src="{{ asset('js/jquery.prettyPhoto.min.js') }}"></script>
        <script src="{{ asset('js/jquery.customSelect.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/buttons.js') }}"></script>
        <script src="{{ asset('js/echo.min.js') }}min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/switchstylesheet.js') }}"></script>
  
</div>
</body>
</html>
