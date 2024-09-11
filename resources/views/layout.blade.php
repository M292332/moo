<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        @include('components.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
