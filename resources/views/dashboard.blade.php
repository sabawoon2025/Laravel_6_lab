
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - IT Student Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 50px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0001;
        }

        h1 {
            color: #1e293b;
        }

        .user-info {
            background: #eff6ff;
            padding: 20px;
            border-radius: 8px;
            margin: 25px 0;
        }

        button {
            background: #dc2626;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>

</head>

<body>

<div class="container">

    <h1>IT Student Portal</h1>

    <p>
        Welcome, {{ auth()->user()->name }}.
    </p>

    <div class="user-info">

        <h3>Your Account Information</h3>

        <p>
            <strong>Name:</strong>
            {{ auth()->user()->name }}
        </p>

        <p>
            <strong>Email:</strong>
            {{ auth()->user()->email }}
        </p>

    </div>

    <!-- Logout form -->
    <form method="POST" action="{{ route('logout') }}">

        @csrf

        <button type="submit">Logout</button>

    </form>

</div>

</body>

</html>
