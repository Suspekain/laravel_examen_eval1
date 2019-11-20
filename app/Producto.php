<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model{
    protected $table = 'productos';
    public function producto() {
        return $this->belongsTo('App\Producto');
    }
    public function tienda() {
        return $this->belongsTo('App\Tienda');
    }
}
