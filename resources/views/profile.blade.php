@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Profile Pengguna</h1>
        </div>
        <div class="card-body">
            @if(!empty($profile['profile_picture']))
                <img src="{{ asset('image/' . $profile['profile_picture']) }}" alt="Profile Picture" width="150">
            @endif

            <h3>{{ $profile['name'] ?? 'Nama tidak tersedia' }}</h3>
            <p>Email: {{ $profile['email'] ?? 'Email tidak tersedia' }}</p>
            <p>Bio: {{ $profile['bio'] ?? 'Tidak ada bio yang ditampilkan' }}</p>

            @if(!empty($profile['skills']) && count($profile['skills']) > 0)
                <h5>Skills</h5>
                <ul>
                    @foreach($profile['skills'] as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-muted">Tidak ada skill yang ditampilkan</p>
            @endif
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
