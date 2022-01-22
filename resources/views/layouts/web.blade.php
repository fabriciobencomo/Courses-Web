<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="lg:mx-10">
        <div class="my-5">
            <nav class="py-2 flex justify-between border-gray-500 border-b-2">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/isotype-courses.png')}}" class="h-12" alt="logo">
                </a>
                <li class="flex my-auto gap-6 text-sm text-gray-500">
                    <ul class="p-2">Pricing</ul>
                    <ul class="p-2">Solutions</ul>
                    <ul class="p-2">Docs</ul>
                    <ul class="p-2">More</ul>
                </li>
                <div class="flex my-auto gap-2">
                    @auth
                        <a href="{{ url('dashboard') }}" class="text-sm text-gray-500 p-2">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ url('login') }}" class="text-sm text-gray-500 p-2">
                            Login
                        </a>
                        <a href="{{ url('register') }}" class="btn bg-teal-500 text-white p-2 text-sm rounded">
                            Register
                        </a>
                    @endif
                </div>
            </nav>
        </div>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>
    <footer class="py-4 text-center">

    </footer>
</body>
</html>
