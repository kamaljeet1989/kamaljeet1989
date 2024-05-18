<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" contents="ie-edge" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
     
@vite(['resources/css/app.css', 'resources/js/app.js'])

<title>The Aulab Post</title>

    </head>
    <body>
    <x-navbar />
    <div class="min-vh-100">
    {{ $slot }}
    </div>
              
    </body>
    </html>