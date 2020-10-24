<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> @yield('title') </title>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/15d4e6a380.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('layout.messages')
        <div class="container">
            @yield('content')
        </div>
        <footer>Developed by the <a href="https://github.com/SamuraiPetrus" target="_blank">SamuraiPetrus'</a> katana fingers.</footer>
    </body>
</html>
