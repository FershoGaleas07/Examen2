<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalles_Pedidos extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'pedido_id',
        'producto_id',
        'cantidad',
        'subtotal'
    ];
}
