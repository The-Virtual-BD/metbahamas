<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap">

    @vite('resources/js/app.js')
    @yield('hscript')
</head>

<body class="antialiased font-os">
    @include('layouts.partials.header')
    @yield('content')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script>
        jQuery(function($){

        })
        $(document).ready(function () {
            $('.togglemenu' ).click(function(){
            $('#mobilemenu').toggleClass('hidden')
        })
        });
    </script>
    @yield('script')
    @include('layouts.partials.footer')

</body>

</html>
