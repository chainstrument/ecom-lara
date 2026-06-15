<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>

    @if($errors->any())
        <div style="color:red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required>
        </div>
        <div>
            <label>
                <input type="checkbox" name="remember"> Se souvenir
            </label>
        </div>
        <div>
            <button type="submit">Se connecter</button>
        </div>
    </form>

    <p>Pas de compte ? <a href="{{ route('register') }}">S'inscrire</a></p>
</body>
</html>
