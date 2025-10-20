<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhodes Island Registration</title>
    <link rel="stylesheet" href="{{ asset('css/registerstyle.css') }}">
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <h2>CREATE YOUR OPERATOR ACCOUNT</h2>

            @if ($errors->any())
                <p class="error">{{ $errors->first() }}</p>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button type="submit">REGISTER</button>
            </form>

            <p class="login-text">Already enlisted? <a href="{{ route('login.form') }}">Login</a></p>
        </div>
    </div>
</body>
</html>
