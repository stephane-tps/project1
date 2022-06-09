
//blade principal (par convention la page principale est dans un dossier 'layouts')

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8"
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mon super site title</title>
        </head>
        <body>
            @yield('content')
        </body>
    </html>

 // autres blades

@extends('bon') //nom de la blade principale

@section('content')

    // code propre a chaque page

@endsection



