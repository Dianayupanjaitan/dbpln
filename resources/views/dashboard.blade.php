<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #4b0082, #483d8b); /* Warna gradasi ungu */
            color: #f0f0f0;
            padding-top: 10px; /* Space for navbar */
            min-height: 100vh;
        }

        .navbar {
            background-color: #6a5acd; /* Warna ungu terang */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .navbar-nav .nav-link:hover {
            color: #ffd700 !important; 
        }

        .content {
            padding: 40px;
        }

        .card {
            background-color: #483d8b; /* Warna ungu gelap */
            border: none;
            border-radius: 15px;
            color: #ffffff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-header {
            background-color: #6a5acd; /* Warna ungu terang */
            font-weight: bold;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-light {
            background-color: #7b68ee;
            color: #ffffff;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-light:hover {
            background-color: #4b0082;
            transform: scale(1.05); /* Sedikit membesar saat hover */
        }

        .footer {
            background-color: #483d8b; /* Warna ungu gelap */
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <button type="submit" class="btn btn-danger nav-link text-white border-0">Logout</button>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf

                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="content">
        <div class="container">
            <h1 class="mb-4">Selamat Datang di Dashboard</h1>

            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header text-center">Golongan</div>
                        <div class="card-body">
                            <p class="card-text">Kelola data golongan di sini.</p>
                            <a href="{{ route('golongan.index') }}" class="btn btn-light w-100">Lihat Golongan</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header text-center">User</div>
                        <div class="card-body">
                            <p class="card-text">Kelola data user di sini.</p>
                            <a href="{{ route('user.index') }}" class="btn btn-light w-100">Lihat User</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header text-center">Pelanggan</div>
                        <div class="card-body">
                            <p class="card-text">Kelola data pelanggan di sini.</p>
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-light w-100">Lihat Pelanggan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
