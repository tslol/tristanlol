<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hey! I am Tristan</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/69ca14e6a8.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <x-nav/>    

        <x-landing/>

        <x-about/>

        <x-projects/>

        <x-ready/>
    
        <x-footer/>

    </body>

</html>