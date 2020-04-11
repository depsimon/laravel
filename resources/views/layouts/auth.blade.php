<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@isset($title){{ $title . ' |' . config('app.name') }}@else{{ config('app.name') }}@endif</title>

    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="font-sans antialiased text-gray-700 bg-gray-200 leading-none">
    <div class="flex items-center justify-center min-h-screen">
        @yield('content')
    </div>
</body>

</html>
