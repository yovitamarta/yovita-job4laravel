<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index ()
    {
        $profile = [
            'name' => 'Yovita Marta Dilla Rahmawati',
            'email' => 'yovitamartadr123@gmail.com',
            'bio' => 'Pelajar SMK Negeri 1 Sayung',
            'profile_picture' => 'profile.jpg',
            'skills' => ['masak', 'scroll']
        ];
        return view('profile', compact('profile'));
    }
}
