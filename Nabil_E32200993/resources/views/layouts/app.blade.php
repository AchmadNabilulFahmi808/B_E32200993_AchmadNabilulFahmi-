<!DOCTYPE html>
<html lang="{{ str_replace('_','_', app()->getlocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-witdh, initial-scale=1.0">
    <meta http-equiv="X_UA_Compatible" content="ie=edge">
    <title>{{ config('app.name')}}</title>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
             <div class="container">
            @yield('content')
            </div>
        </div>
    </body>
    </html>