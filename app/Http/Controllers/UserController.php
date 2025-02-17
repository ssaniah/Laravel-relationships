<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $users = User::latest()->get(); // Mengambil semua pengguna dari model, diurutkan berdasarkan yang terbaru

        return view('users', compact('users')); // Mengirim data pengguna ke view
    }
} 