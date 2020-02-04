<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public function kategori(){
        return $this->belongsTo(Category::class, "kategori_id");
    }

    public function currency(){
        return $this->belongsTo(Currency::class, "currency_id");
    }
}
