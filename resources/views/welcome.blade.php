<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="container p-4">
    <h1 class="text-5xl font-bold mb-4">Test</h1>
    <div class="join">
        <button class="btn btn-primary join-item">Button</button>
        <button class="btn btn-info join-item">Button</button>
    </div>
</body>

</html>
