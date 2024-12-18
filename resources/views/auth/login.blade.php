<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Playfair Display', serif; /* Font klasik */
            background-color: #fdfbf7; /* Cream vintage */
            color: #3d3d3d; /* Abu tua untuk teks */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #f8f4ec; /* Cream terang */
            border: 2px solid #c0d9b9; /* Hijau pastel */
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Efek bayangan lembut */
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }

        .card-title {
            color: #6b8e61; /* Hijau daun klasik */
            font-family: 'Nunito', sans-serif; /* Kombinasi modern sans-serif */
            font-weight: 700;
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
            color: #4e4e4e; /* Abu gelap */
            font-size: 1rem;
        }

        .form-control {
            border: 2px solid #c0d9b9; /* Hijau pastel */
            border-radius: 8px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #91c788; /* Hijau pastel lebih cerah */
            box-shadow: 0 0 5px #91c788;
        }

        .btn-primary {
            background-color: #91c788; /* Hijau pastel */
            border: none;
            font-weight: bold;
            font-size: 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            width: 100%;
            color: white;
            padding: 10px;
        }

        .btn-primary:hover {
            background-color: #76b571; /* Hijau lebih tua */
            transform: scale(1.03);
        }

        .alert {
            background-color: #f8d7da; /* Warna merah lembut */
            border: none;
            color: #721c24;
            border-radius: 8px;
            font-size: 0.9rem;
            padding: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
    <div class="card shadow-sm">
        <h2 class="card-title">Selamat Datang</h2>

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
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="contoh: email@domain.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan kata sandi" required>
            </div>
            <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
