<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $word = "Saya Kuliah di Stimata";
        return view('profile', ['word' => $word]);
    }
}
