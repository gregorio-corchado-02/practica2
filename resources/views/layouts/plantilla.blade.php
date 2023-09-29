<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    
    <title>@yield('title') / Mi Diario</title>
    <link rel="icon" href="https://i.pinimg.com/originals/5a/77/57/5a77578a56d0ef0e165b6d08ad2c5d15.jpg">
</head>
<body style="background-color: white;">
    @yield('contenido')
    
</body>
</html>

