<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title')</title>

        <!-- Fonts do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    
        <!-- CSS botstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img class="nav-img" src="/img/logo/logo.png" alt="Logo do site mangá">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/popular" class="nav-link">Popular</a>
                        </li>
                        <li class="nav-item">
                            <a href="index" class="nav-link">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a href="index" class="nav-link">Sign Up</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>Mangá Project Online &copy; 2022</p>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </footer>
    </body>
</html>