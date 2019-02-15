<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Laravel - Sami Balouki</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        {{csrf_field()}}
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Idéal Groupe - Test de développement</span>
        </nav>
        <div class="container">
            <div>
                <h1>Valeur à incrémenter : <span class="badge badge-secondary"><span id="value"></span></span></h1>
            </div>
            <button type="button" class="btn btn-primary btn-lg" onClick="incrementValue()">Incrémenter l'élément</button>
        </div>
        <!-- JavaScripts -->
        <script src="{{URL::asset('js/value.js')}}"></script>
    </body>
</html>