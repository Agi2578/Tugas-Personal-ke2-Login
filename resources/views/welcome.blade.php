<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Personal ke-2</title>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            background-color: #f7fafc;
            color: #1a202c;
            font-family: 'Nunito', sans-serif;
            font-size: 1.2rem;
            line-height: 1.6;
            margin: 0;
        }
        a {
            color: #4a5568;
            text-decoration: none;
        }
        a:hover {
            color: #1a202c;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .title {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 2rem;
            text-align: center;
            text-shadow: 2px 2px #e2e8f0;
        }
        .links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 2rem;
        }
        .links a {
            margin: 0.5rem;
            padding: 1rem 2rem;
            background-color: #e2e8f0;
            border-radius: 5px;
            box-shadow: 2px 2px #cbd5e0;
            transition: all 0.2s ease-in-out;
        }
        .links a:hover {
            background-color: #4a5568;
            color: #e2e8f0;
        }
        .links a:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
        <h1>Tugas Personal ke-2 <h1>
             <h2> Week 7 <h2>
        </div>
        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</body>
</html>