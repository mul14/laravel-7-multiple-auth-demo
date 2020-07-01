<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Multi-Auth Demo</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <div class="flex h-screen">
        <main class="max-w-sm mx-auto self-center">
            <h1 class="text-2xl text-center mb-10">
                <a href="https://github.com/mul14/laravel7-multi-auth-demo">
                    Laravel Multi-Auth Demo
                </a>
            </h1>

            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>
</html>
