<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Description of the page">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-v4.0.min.css') }}">
        <!-- Foundation ZURB -->
        <!-- <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}"> -->
        <!-- Lightbox -->
        <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
        <!-- Basic Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Navbar Style -->
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <!-- Footer Style -->
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <!-- Default Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->
        @yield('extra-css')
        <!-- Google Open Sans -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <title>SMA Negeri 3 Jakarta | @yield('title')</title>
    </head>
    <body>
        @include('layout.header')
        @yield('content')
    </div>
    <!-- JQuery -->
    <script type="application/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <!-- <script type="application/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
    <!-- PopperJS -->
    <script type="application/javascript" src="https://unpkg.com/popper.js"></script>
    <!-- TooltipJS -->
    <script type="application/javascript" src="https://unpkg.com/tooltip.js"></script>
    <script type="application/javascript" src="{{ asset('js/lightbox.js') }}"></script>
    <!-- Bootstrap -->
    <script type="application/javascript" src="{{ asset('js/bootstrap-v4.0.min.js') }}"></script>
    <!-- Foundation ZURB -->
    <script type="application/javascript" src="{{ asset('js/what-input.js') }}"></script>
    <!-- <script type="application/javascript" src="{{ asset('js/foundation.min.js') }}"></script> -->
    <!-- Font Awesome -->
    <script type="application/javascript" src="{{ asset('js/fontawesome-all.min.js') }}"></script>
    <!-- Customization -->
    <script type="application/javascript" src="{{ asset('js/header.js') }}"></script>
    <script type="application/javascript" src="{{ asset('js/footer.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118439967-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118439967-1');
    </script>
    @yield('extra-js')

    <div class="bg-dark">
        <div class="container">
            @include('layout.footer')
        </div>
    </div>
</body>
</html>
