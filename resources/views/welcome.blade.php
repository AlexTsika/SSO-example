<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>tombraider</title>

    </head>
    <body>
        <h1>SSO Login</h1>
        {{-- login with google --}}
        <a href="{{ route('loginsoc') }}">Login with Google</a><br><br>
        {{-- login with github --}}
        <a href="{{ route('logingithub') }}">Login with Github</a>
    </body>
</html>