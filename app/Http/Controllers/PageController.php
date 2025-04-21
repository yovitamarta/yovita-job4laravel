<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view ('home');
    }

    public function about()
    {
        $foto = [
            'foto-visi-misi' => 'profile.jpg' ,
        ];
        return view ('about', compact('foto'));
    }

    public function contact()
    {
        return view ('contact');
    }
}
