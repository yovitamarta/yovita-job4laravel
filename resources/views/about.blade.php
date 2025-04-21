<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .box-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
        }
        .team-card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="http://127.0.0.1:8000">MyApp</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/profile">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Tentang Kami -->
        <div class="box-container">
            <h1 class="text-center fw-bold">Tentang Kami</h1>
        </div>

        <!-- Visi & Misi -->
        <div class="box-container">
            <div class="row align-items-center">
                <div class="col-md-6">
                <h2 class="text-center fw-bold">Visi & Misi</h2>
                    <h3>Visi</h3>
                    <p>"Menjadi platform digital terdepan yang menghubungkan teknologi dengan kebutuhan masyarakat."</p>
                    <h3>Misi</h3>
                    <ul>
                        <li>Inovasi Berkelanjutan – Mengembangkan teknologi terbaru.</li>
                        <li>Kemudahan Akses – Solusi mudah untuk semua orang.</li>
                        <li>Kolaborasi & Komunitas – Membangun ekosistem yang mendukung pertumbuhan bersama.</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('image/' . $foto['foto-visi-misi']) }}" alt="Visi dan Misi" class="img-fluid" width="400">
                </div>
            </div>
        </div>

        <!-- Sejarah -->
        <div class="box-container">
        <h2 class="text-center fw-bold">Sejarah MyApp</h2>
            <p class="text-center">
                MyApp didirikan untuk menghadirkan solusi digital inovatif yang mempermudah kehidupan masyarakat di era teknologi.
                Saat Ini & Masa Depan
Kini, MyApp terus berkembang dengan menghadirkan solusi berbasis AI, cloud computing, dan big data untuk meningkatkan pengalaman pengguna. Dengan lebih dari 1 juta pengguna aktif, MyApp berkomitmen untuk terus berinovasi dan menjadi platform digital terdepan yang memberikan dampak positif bagi masyarakat.
            </p>
        </div>

        <!-- Tim Kami -->
        <div class="box-container">
        <div class="row justify-content-center">
            <h2 class="text-center fw-bold">🧑🏻 Tim Kami 👩🏻</h2>
                <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                    <img src="{{ asset('image/' . $foto['foto-visi-misi']) }}" alt="foto" class="img-fluid" width="100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Alicia</h5>
                            <p class="card-text text-muted">Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                    <img src="poto.jpeg" alt="foto1" class="img-fluid" width="100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Jackson</h5>
                            <p class="card-text text-muted">Lead Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                    <img src="foto.jpeg" alt="foto" class="img-fluid" width="100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Alesha</h5>
                            <p class="card-text text-muted">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hubungi Kami -->
        <div class="box-container text-center">
        <h2 class="text-center fw-bold">☎️ Hubungi Kami ☎️</h2>
            <p>Jika Anda memiliki pertanyaan atau masukan, silakan hubungi kami melalui:</p>
            <p>✉️ Email: <a href="email:lalalamo@gmail.com">lalalamo@gmail.com</a></p>
            <p>📞 Telepon: <a href="tel:+6212345678900">+62 12345678900</a></p>
            <p>📍 Alamat: Jl. Sayung No.123, Demak, Indonesia</p>
        </div>
    </div>

<!-- Footer -->
<footer class="footer">
        <div class="text-center p-3 bg-white text-dark">
        <div class="container">
            <div class="row">
        <!-- Copyright -->
        <div class="copyright">
            <p>&copy; 2025 MyApp. All Rights Reserved.</p>
        </div>
        </div>
    </footer>
</body>
</html>
