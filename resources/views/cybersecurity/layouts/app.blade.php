<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yeld('title', 'Pagina di deafult')</title>
</head>
<body>
    <!-- Includo il codice che andrò a scrivere nei file partials -->
    <!-- Header -->
    @include('partials.header')

    <!-- Main -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')
</body>
</html>
