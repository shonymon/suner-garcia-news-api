<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Check For Metas -->
        <!-- Check For Metas -->
        <!-- Check For Metas -->
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    </head>
    <body>
        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
