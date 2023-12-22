<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen">
    <div class="flex justify-between py-4 px-20 bg-gray-100 shadow-md">
        <header>
            <h1 class="te font-semibold text-xl">Laravel Todo HTMX</h1>
        </header>
    
        {{-- <nav>
            <ul class="list-none flex gap-10">
                <li><a href="/">Register</a></li>
            </ul>
        </nav> --}}
    </div>

    <main class="py-8 px-20">
        @yield('content')
    </main>

</body>
</html>
