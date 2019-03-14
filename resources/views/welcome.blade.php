<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <script src="/js/app.js" defer></script>

    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div id="app">
        <contacts></contacts>
    </div>
</div>
</body>
</html>
