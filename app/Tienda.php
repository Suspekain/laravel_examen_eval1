<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model {
    protected $table = 'tiendas';
    public function producto() {
        return $this->hasMany('App\Producto');
    }
}
