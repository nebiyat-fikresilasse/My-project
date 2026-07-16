<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Siltawi Digital Marketing Company Profile">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siltawi Digital Marketing</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <img src="https://workshop.siltawi.com/siltawi_logo_normal_eng_v2.svg" alt="Company Logo" width="150">
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/portfolio') }}">Portfolio</a>
        <a href="{{ url('/team') }}">Team</a>
        <a href="{{ url('/testimonials') }}">Testimonials</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2026 Siltawi Digital Marketing</p>
</footer>
</body>
</html>

