<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Qz9IQlBb8a4WUE5G6NRsBZ+HfK5TzohZrMNdpnF23J4zlhJf+1SRhLrhbcSO4jfF" crossorigin="anonymous">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
</head>
<body>
    {{ $slot }}
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoYp9BZnYb6Zp6N9Wt7J0AOqBqzZnN0M4RDf1QksYuFWMc" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>
</html>
