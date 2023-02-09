<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-secondary">

    <header class="container-fluid bg-dark pt-3 pb-2 mb-3">
        <div class="row">
            <div class="col text-light">
                <h1>Movies</h1>
            </div>
        </div>
    </header>

    <main class="container">
        <div class="row gy-3">
            @foreach ($movies as $movie)
            <div class="card bg-secondary border-0" style="width: 264px; ">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-light bg-dark lh-lg">{{ $movie->original_title }}</li>
                    <li class="list-group-item text-light bg-dark lh-lg">{{ $movie->nationality }}</li>
                    <li class="list-group-item text-light bg-dark lh-lg">{{ $movie->date }}</li>
                    <li class="list-group-item text-light bg-dark lh-lg">{{ $movie->vote }}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </main>

</body>

</html>