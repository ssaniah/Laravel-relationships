<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $posts = Post::latest()->get(); // Mengambil semua post dari model, diurutkan berdasarkan yang terbaru

        return view('posts', compact('posts')); // Mengirim data posts ke view
    }
}