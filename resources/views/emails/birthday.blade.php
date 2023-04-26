<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Feliz Cumpleaños</title>
    <style>
        /* Estilos CSS */
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
<h1>Feliz Cumpleaños {{ \Carbon\Carbon::createFromDate($user->birthday)->age }}, {{ $user->name }}!</h1>
<p>Esperamos que tengas un día maravilloso rodeado de amor, familia y amigos.</p>
<p>No olvides disfrutar tu día al máximo y hacer algo especial para ti.</p>
<p>De parte de todo el equipo de {{ config('app.name') }}, te deseamos un muy feliz cumpleaños.</p>
</body>
</html>
