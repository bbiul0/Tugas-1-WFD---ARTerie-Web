<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50">

    <nav class="bg-[#024731] text-white p-4 flex justify-between">
        <!-- <div class="text-lg font-bold">ARTERIE</div> -->
        <div class="text-xl font-serif font-semibold tracking-wide text-white-900"> 🎨ARTerie Studio</div>
        <!-- <h1 class="text-4xl font-serif font-semibold text-center text-gray-800">Welcome, Artists!</h1> -->


        <div>
            <a href="/" class="mx-2">Home</a>
            <a href="/catalog" class="mx-2">Catalog</a>
        </div>
    </nav>

    <div class="container mx-auto p-6">
        @yield('content')
    </div>

</body>
</html>
