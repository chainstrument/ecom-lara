<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
</head>
<body>
    <h1>Accueil</h1>

    @auth
        <p>Bonjour, {{ auth()->user()->name }} !</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Se déconnecter</button>
        </form>
    @else
        <p>Vous n'êtes pas connecté. <a href="{{ route('login') }}">Se connecter</a></p>
    @endauth

</body>
</html>
