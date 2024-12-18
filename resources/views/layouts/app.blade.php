<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #fdfcf7; /* Warna cream lembut */
            color: #3c3c3c; /* Warna teks abu-abu tua */
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container-content {
            background-color: #f8f4ec; /* Cream terang */
            border: 2px solid #c0d9b9; /* Green pastel */
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            transition: all 0.3s ease;
        }

        .container-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-back {
            background-color: #91c788; /* Green pastel */
            color: #fff; /* Putih */
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
            position: fixed;
            bottom: 30px;
            left: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-back:hover {
            background-color: #76b571; /* Hijau lebih pekat */
            transform: scale(1.05);
        }

        .footer {
            background-color: #c0d9b9; /* Hijau pastel */
            color: #3c3c3c; /* Teks abu-abu tua */
            text-align: center;
            padding: 12px 0;
            margin-top: auto;
            font-size: 0.9rem;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #6b8e61; /* Hijau daun */
            font-size: 2rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #91c788; /* Warna tombol hijau pastel */
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            color: #fff; /* Putih */
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #76b571;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <!-- Tombol Kembali -->
    <a href="javascript:history.back()" class="btn-back shadow">← Kembali</a>

    <!-- Konten Utama -->
    <div class="container d-flex justify-content-center align-items-center flex-column">
        <div class="container-content w-75">
            <h1>@yield('title')</h1>
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 - Dibuat oleh Dian Ayu Syahputri Panjaitan
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
