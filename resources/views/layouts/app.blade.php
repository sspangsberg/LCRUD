<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('components.header')
</head>
<body>
    <div id="app">

        @include('components.navbar')

        <div class="container">
            @yield('content')
        </main>
    </div>
</body>
</html>
