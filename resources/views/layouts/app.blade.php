<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>{{config('app.name')}} - A sua melhor comodidade me Rio Claro</title>
    </head>
    <body>
        @include('inc.header')
        @include('inc.banner')
        <div class="container-fluid">
            @yield('content')
        </div>
        @include('inc.rodape')
    </body>
</html>
