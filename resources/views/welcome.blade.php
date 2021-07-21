<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/layout.css" rel="stylesheet">
            
        <link href="/css/app.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="  flex-center position-ref full-height">;">
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

            <div class="content">
            <img src="image/sasageyo.png" height="250" width="auto" alt="aot logo">
                <div class="title m-b-md">
                    Fadli Tobiansyah
                </div>

                <div class="links">
                    <a href="https://api.whatsapp.com/send?phone=6288245623765&text=Hallo%20Anak%20Baik">Whatsapp</a>
                    <a href="https://www.instagram.com/penemu_ganjil/">Intagram</a>
                    <a href="https://github.com/Ftobiansyah123">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
