<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $table = 'formulario';
    protected $primaryKey = "id";
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'email',
        'contraseña'
    ];

}
