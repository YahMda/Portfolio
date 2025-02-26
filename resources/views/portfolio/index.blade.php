<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="profile">
        <h1>Komang Mada Maha Putra Wilwatikta</h1>
        <p>Mahasiswa Sistem Komputer STIKOM Bali</p>
    </section>

    <section class="content">
        <div class="box">
            <h2>Organizations</h2>
            <p>Kelompok Studi Linux (KSL)</p>
        </div>
        <div class="box">
            <h2>Education</h2>
            <p>Sistem Komputer, STIKOM Bali</p>
        </div>
    </section>

    <footer>
        <p>2025 © All rights reserved by Komang Mada</p>
    </footer>
</body>
</html>
