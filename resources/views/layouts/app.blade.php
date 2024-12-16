<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'server')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #4b0082, #483d8b); /* Warna biru campur ungu */
            color: #f0f0f0;
            padding-top: 70px; /* Space for fixed navbar */
            height: 100vh; /* Mengatur tinggi body ke 100% layar */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .container-content {
            background-color: #6a5acd; /* Warna biru-ungu */
            border: 3px solid #7b68ee; /* Border biru-ungu terang */
            border-radius: 15px; /* Membuat sudut melengkung */
            padding: 20px;
            box-shadow: 4px 4px 0px #2e2b5f; /* Bayangan biru tua */
            margin-top: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease-in-out;
            text-align: center; /* Mengatur teks di tengah */
        }

        .container-content:hover {
            box-shadow: 6px 6px 0px #000080;
            transform: scale(1.05); /* Sedikit membesar saat hover */
        }

        .btn-back {
            background-color: #483d8b; /* Warna biru-ungu gelap */
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
            position: fixed;
            bottom: 60px;
            left: 20px;
        }

        .btn-back:hover {
            background-color: #4b0082;
            transform: translateY(-2px); /* Sedikit naik saat hover */
        }

        .footer {
            background: #2e2b5f; /* Warna gelap untuk footer */
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 0.9rem;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <a href="javascript:history.back()" class="btn-back mb-3">← Kembali</a>
    <div class="container d-flex justify-content-center align-items-center flex-column">
        <div class="container-content w-75">
            @yield('content')
        </div>
    </div>

    <div class="footer">
        &copy; Vidya Ramadhani
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
