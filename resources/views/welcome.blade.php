<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME', '') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div>
            <nav class="flex w-screen px-6 py-4 bg-indigo-400">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm rounded bg-gray-700 text-gray-300 px-3 py-2 hover:text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm rounded bg-gray-700 text-gray-300 px-3 py-2 hover:text-white hover:bg-gray-900">Log in</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm rounded bg-gray-700 text-gray-300 px-3 py-2 hover:text-white hover:bg-gray-900">Register</a>
                        @endif
                    @endauth
                @endif
            </nav>
            <div class="container mx-auto mt-10">
                <div class="flex justify-center">
                    <div class="flex-row mr-2">
                        <div class="flex mb-2">teste</div>
                        <div class="flex mb-2">teste</div>
                        <div class="flex mb-2">teste</div>
                        <div class="flex">teste</div>
                    </div>
                    <div class="flex-row mr-2">
                        <div class="flex mb-2">teste</div>
                        <div class="flex mb-2">teste</div>
                        <div class="flex mb-2">teste</div>
                        <div class="flex">teste</div>
                    </div>
                    <div class="flex-row mr-2">
                        <div class="flex mb-2">teste</div>
                        <div class="flex mb-2">teste</div>
                        <div class="flex mb-2">teste</div>
                        <div class="flex">teste</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
