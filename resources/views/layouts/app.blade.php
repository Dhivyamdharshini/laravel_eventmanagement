<!DOCTYPE html>
<html>
<head>
    <title>Event Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <!-- Video Background -->
    <video autoplay muted loop id="background-video">
    <source src="{{ asset('videos/backgroundvideo.mp4') }}" type="video/mp4">
</video>


<body class="container mt-5">
    @yield('content')
</body>
</html>
