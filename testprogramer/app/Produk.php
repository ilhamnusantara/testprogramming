<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guard = [];
    protected $table = 'produks';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'nama_produk', 'harga', 'kategori', 'status'
    ];
}
