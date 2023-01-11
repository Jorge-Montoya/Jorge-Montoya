<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $table='usuarios';
    protected $fillable=[
        'id',
        'nombre',
        'sexo',
        'organizacion',
        'direccion',
        'rol'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
    protected $primarykey='id';
}
