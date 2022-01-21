<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Comics</title>
</head>
<body>
    @include('components.comics-main-header')

    @include('components.comics-jambo')

    @include('components.series')

    @yield('content')

    @include('components.comics-main-footer')
</body>
</html>