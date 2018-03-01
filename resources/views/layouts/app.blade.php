<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Expert Cleaning Service, Anca Cleaning Service, Deep Clean, Power Clean, Ultra, Ecologic">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon"
                  type="image/png"
                  href="/images/favi.png">
            <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Anca Cleaning</title>

    <!-- Styles -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Scripts-->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<body>
  @include('inc.navbar')

    <div id="app">
    @yield('content')
    </div>
    @include('inc.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
