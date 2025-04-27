<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My App')</title>
</head>
<body>
    @include('components.header')
    <h1>List Produk </h1>
    <div class="container">
        <main>
        @yield('content')
</main>
    </div>

    <footer>
    @include('components.footer')
</footer>
</body>
</html>
