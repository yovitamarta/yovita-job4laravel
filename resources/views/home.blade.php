@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')
    <div class="jumbotron text-center bg-light py-5">
        <h1 class="display-4">Selamat Datang di My App</h1>
        <p class="lead">Aplikasi Laravel sederhana dengan Laravel Blade</p>
        
        @if(Route::has('profile'))
            <a href="{{ route('profile') }}" class="btn btn-primary btn-lg">Lihat Profile</a>
        @else
            <p class="text-danger">Halaman profil tidak tersedia.</p>
        @endif
    </div>

     <!-- Fitur Unggulan MyApp -->
         <div class="container mt-5">
    <h2 class="text-center fw-bold">✨ Fitur Unggulan ✨</h2>
    <div class="row">
    <div class="row justify-content-center">
            <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                        <div class="card-body">
                            <h1>💡</h1>
                           <h4>AI & Data Analytics</h4>
                           <p>Memberikan insight bisnis berdasarkan data transaksi untuk pengambilan keputusan yang lebih tepat.</p>
                           </div>
                        </div>
                    </div>
            <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                        <div class="card-body">
                            <h1>💻</h1>
                           <h4>Akses Multi-Platform</h4>
                           <p>Bisa digunakan di HP, tablet, dan komputer dengan sinkronisasi cloud.</p>
                           </div>
               </div>
                    </div>
            <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                        <div class="card-body">
                            <h1>🔗</h1>
                           <h4>Sistem CRM</h4>
                           <p>Membangun hubungan yang lebih baik dengan pelanggan melalui pencatatan riwayat transaksi dan preferensi.</p>
                           </div>
                           </div>
                        </div>
            <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                        <div class="card-body">
                            <h1>💾</h1>
                           <h4>Keamanan Data Tinggi</h4>
                           <p>Enkripsi data dan backup otomatis untuk melindungi informasi bisnis.</p>
                        </div>
                        </div>
                    </div>
            </div>  

    <!-- Testimoni MyApp -->
        <div class="container mt-5">
          <h2 class="text-center fw-bold">💬 Testimoni Pengguna 💬</h2>
            <div class="row">
            <div class="row justify-content-center">
            <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                        <div class="card-body">
                           <p>“MyApp sangat membantu dalam mengelola bisnis saya! Laporannya lengkap dan mudah digunakan.”</p>
                           <h5>-Ruby-</h5>
                           <p>⭐ ⭐ ⭐ ⭐ ⭐</p>
                        </div>
                        </div>
                    </div>
            <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                        <div class="card-body">
                           <p>“Sangat praktis! Fitur akuntansinya sangat membantu saya dalam menyusun laporan keuangan.”</p>
                           <h5>-Mikhael-</h5>
                           <p>⭐ ⭐ ⭐ ⭐ ⭐</p>
                        </div>
               </div>
                    </div>
            <div class="col-md-3">
                    <div class="card text-center shadow-lg border-0 team-card">
                        <div class="card-body">
                           <p>“Semenjak pakai MyApp, transaksi lebih cepat dan laporan keuangan lebih rapi! Sangat membantu.”</p>
                           <h5>-William-</h5>
                           <p>⭐ ⭐ ⭐ ⭐ ⭐</p>
                        </div>
                           </div>
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

@endsection