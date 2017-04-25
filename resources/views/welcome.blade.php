<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shared State</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div id="one">
            <h1>@{{ shared.user.name }}</h1>
        </div>

        <div id="two">
            <h1>@{{ shared.user.name }}</h1>
        </div>

        <script src="https://unpkg.com/vue@2.2.6"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
