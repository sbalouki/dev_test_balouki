<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>
        <h1>Test de développement</h1>
        <div class="container">
            {{csrf_field()}}
            <span id="value"></span>
            <button onClick="incrementValue()">Incrémenter l'élément</button>
        </div>

        <!-- JavaScripts -->
        <script src="{{URL::asset('js/value.js')}}"></script>
    </body>
</html>