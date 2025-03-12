<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos_Categorias extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'producto_id',
        'categoria_id'
    ];
}
