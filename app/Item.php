<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nama', 'harga','kategori','stok','gambar'
    ];
}
