
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - IT Student Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            width: 350px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0001;
        }

        h1 {
            text-align: center;
            color: #1e293b;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 11px;
            margin-top: 6px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        a {
            color: #2563eb;
            text-decoration: none;
        }

        .error {
            color: #dc2626;
        }

        .success {
            color: #15803d;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Create an account</h1>

    <!-- Display validation errors -->
    @if ($errors->any())
        <ul class="error">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <!-- Display success message -->
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <!-- Registration form -->
    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <label for="name">Full name</label>
        <input
            id="name"
            name="name"
            type="text"
            value="{{ old('name') }}"
            required
        >

        <label for="email">Email address</label>
        <input
            id="email"
            name="email"
            type="email"
            value="{{ old('email') }}"
            required
        >

        <label for="password">Password</label>
        <input
            id="password"
            name="password"
            type="password"
            minlength="8"
            required
        >

        <label for="password_confirmation">
            Confirm password
        </label>
        <input
            id="password_confirmation"
            name="password_confirmation"
            type="password"
            minlength="8"
            required
        >

        <button type="submit">Register</button>
    </form>

    <p>
        Already have an account?
        <a href="{{ route('login') }}">Login</a>
    </p>

</div>

</body>
</html>
