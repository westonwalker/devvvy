<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        .header {
            font-family: 'Pacifico', cursive;
        }
    </style>
</head>

<body class="h-full antialiased">
    {{ $slot }}
    <div class="bg-gray-100 p-2 text-xs text-center">
        <a target="_blank" href="https://icons8.com/icon/s7V1VBWLMUQl/email">Email icon by Icons8</a>
    </div>
</body>

</html>
