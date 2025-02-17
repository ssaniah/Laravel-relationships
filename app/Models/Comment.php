<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    /**
     * post
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo(Post::class);// Menentukan hubungan bahwa setiap komentar berhubungan dengan satu post
    }
}
    
