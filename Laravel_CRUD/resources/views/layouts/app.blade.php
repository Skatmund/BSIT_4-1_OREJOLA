
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Student Registry') | Hogwarts</title>

    <link rel="stylesheet" href="{{ asset('css/hogwarts.css') }}">
</head>
<body>

    <header class="topbar">
        <h1>THE HOGWARTS</h1>
        <p>SCHOOL OF WITCHCRAFT AND WIZARDRY</p>
    </header>

    <nav class="navigation">
        <a href="{{ route('students.index') }}">Student Registry</a>
        <a href="{{ route('students.create') }}">Enroll Student</a>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        DRACO DORMIENS NUNQUAM TITILLANDUS
        <br>
        HOGWARTS STUDENT ARCHIVES
    </footer>

</body>
</html>
