<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    
   /**
     * Menentukan hubungan antara model Phone dan User.
     * Setiap Phone dimiliki oleh seorang User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo*/
     
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}