<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Pastikan fillable Anda sudah ada atau minimal kosong
    protected $guarded = [];

    /**
     * INI BAGIAN PALING PENTING:
     * Pastikan fungsi di bawah ini ada dan sudah benar.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
