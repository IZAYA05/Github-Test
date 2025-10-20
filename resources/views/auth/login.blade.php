<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhodes Island Login</title>
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>RHODES ISLAND ACCESS</h2>

            @if ($errors->any())
                <p class="error">{{ $errors->first() }}</p>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">LOGIN</button>
            </form>


            <p class="register-text">No ID registered? <a href="{{ route('register.form') }}">Register</a></p>
        </div>
    </div>
</body>
</html>
