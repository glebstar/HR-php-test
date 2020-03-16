<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Температура в Брянске</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <h1>Температура в Брянске</h1>
        <p><span id="temp">{{ $temp }}</span> градусов по Цельсию</p>
    </div>

    <script src="/js/app.js"></script>
    <script src="/js/script.js?v=2"></script>
<script>
    let csrf_token = '{{ csrf_token() }}';

    setInterval(getTemperature(), 300000); // обновляем раз в пять минут
</script>
</body>
</html>
