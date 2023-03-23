<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/dmkiou9g3/image/upload/v1675258983/naxlaostwo2023/hmongmovie/WhatsApp_Image_2023-02-01_at_10.43.39_k5ie7i.jpg"
        type="image/x-icon">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @stack('third_party_stylesheets')

    @stack('page_css')
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Main Header -->
        @include('layouts.navbar')

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{ $slot }}
        </div>

        <!-- Main Footer -->
        @include('layouts.footer')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

    @stack('third_party_scripts')
    @stack('page_scripts')

    @livewireScripts

    @stack('scripts')

</body>

</html>
