<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script src="{{ asset('assets/js/lib/jquery-3.7.1.min.js') }}">
        </script>
        <script src="{{ asset('assets/js/lib/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/simple-datatables.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('assets/js/lib/magnifc-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/prism.js') }}"></script>
        <script src="{{ asset('assets/js/lib/file-upload.js') }}"></script>
        <script src="{{ asset('assets/js/lib/audioplayer.js') }}"></script>
{{--        <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>--}}
        <script src="{{ asset('assets/js/app.js') }}"></script>
{{--  <script src="{{asset('assets/js/homeOneChart.js')}}"></script>--}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
