<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Georgia', serif;
            background: #faf1e6; 
            color: #3c3c3c;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        
        .navbar {
            background-color: #6b705c; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
            color: #ffe8d6; 
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: #d6ccc2;
        }

        .navbar-nav .nav-link:hover {
            color: #ffcb69; 
        }

   
        .content {
            padding: 30px;
            margin-top: 20px;
        }

        h1 {
            font-size: 2rem;
            color: #6b705c;
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            background-color: #ffe8d6; 
            border: 2px solid #cb997e; 
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background-color: #b7b7a4;
            font-weight: bold;
            text-align: center;
            color: #3c3c3c;
        }

        .card-body {
            color: #6b705c;
        }

        .btn-custom {
            background-color: #cb997e; 
            color: white;
            font-weight: bold;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #ddbea9;
            transform: scale(1.05);
        }

        .footer {
            background-color: #6b705c;
            color: #ffe8d6;
            padding: 10px 0;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Hai, <b>Dian Ayu</b>!</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-custom">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="content">
        <div class="container">
            <h1>Selamat Datang!</h1>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">Kelola Golongan</div>
                        <div class="card-body text-center">
                            <p>Manajemen data golongan dapat dilakukan di sini.</p>
                            <a href="{{ route('golongan.index') }}" class="btn btn-custom">Lihat Golongan</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">Kelola Pengguna</div>
                        <div class="card-body text-center">
                            <p>Manajemen data pengguna dapat dilakukan di sini.</p>
                            <a href="{{ route('user.index') }}" class="btn btn-custom">Lihat Pengguna</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">Kelola Pelanggan</div>
                        <div class="card-body text-center">
                            <p>Manajemen data pelanggan dapat dilakukan di sini.</p>
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-custom">Lihat Pelanggan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
