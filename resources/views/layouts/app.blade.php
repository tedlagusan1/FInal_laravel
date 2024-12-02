<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Booth</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light-violet text-dark">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e6ccff;">
        <div class="container">
            <a class="navbar-brand text-dark" href="{{ route('movies.index') }}">Movie Booth</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Content -->
    <div class="container my-5">
        @yield('content')
    </div>


</html>
