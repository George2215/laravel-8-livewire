<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Curso de Programación Web</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <header class="shadow-lg">
            <div class="bg-blue-900 py-1">
                <nav class="bg-blue-800 py-2">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/platzi.png') }}" class="mx-auto h-8">
                    </a>
                </nav>
            </div>
        </header>
        <main class="py-10">
            <div class="container mx-auto px-4">
                @yield('content')
            </div>
        </main>
        <footer class="py-4 text-center">
            @auth
                <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">
                    Dashboard
                </a>
            @else
                <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">
                    Login
                </a>
                <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 underline">
                    Registro
                </a>
            @endif
        </footer>
    </body>
</html>