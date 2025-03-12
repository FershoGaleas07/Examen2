<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuarios_Roles extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id_usuario',
        'id_rol'
    ];
}
