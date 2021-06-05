<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetFood</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/customer/general.css') }}">
    @yield('head')
</head>
<body>
    <div class="device">
        <nav class="navbar navbar-light bg-light mb-3">
            <a class="arrow left" href="#"></a>
            <span class="navbar-brand">Get Food</span>
        </nav>
        @yield('content')
    </div>
</body>
</html>
