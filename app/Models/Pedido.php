<?php

namespace App\Models;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'pedido_productos');
    }
}
