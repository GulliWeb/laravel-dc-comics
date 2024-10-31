<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/scss/app.scss'])
    <title>@yield('title', 'Pagina di deafult')</title>
</head>
<body>
    <!-- Includo il codice che andrò a scrivere nei file partials -->
    <!-- Header -->
    @include('Supercars/layouts/partials.header')

    <!-- Aggiungo il codice che verrà modificato in caso di più pagine tramite le section nel mio file pages -->
    <!-- Main -->
    <main>
        @yield('content')
    </main>

    <!-- Includo il footer tramite il codice scritto nel file footer nei partials -->
    <!-- Footer -->
    @include('Supercars/Layouts/partials.footer')
</body>
</html>
