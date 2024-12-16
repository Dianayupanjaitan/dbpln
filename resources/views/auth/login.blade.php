<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #4b0082, #483d8b); /* Matching the background gradient */
            color: #f0f0f0; /* Light text for contrast */
            padding-top: 70px; /* Space for fixed navbar */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: #6a5acd; /* Matching blue-purple */
            border: 3px solid #7b68ee; /* Light purple border */
            border-radius: 15px;
            box-shadow: 4px 4px 0px #2e2b5f; /* Deep purple shadow */
            padding: 40px;
            width: 90%;
            max-width: 400px;
        }

        .form-label {
            font-weight: bold;
            color: #f0f0f0; /* Lighter label text for better contrast */
        }

        .btn-primary {
            background-color: #483d8b; /* Darker blue-purple for button */
            border: none;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #4b0082; /* Lighter blue-purple on hover */
        }

        .alert {
            background-color: #ffcdd2;
            border: none;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .alert ul li {
            list-style: none;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2 class="text-center mb-4" style="color: #f0f0f0;">Login</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
