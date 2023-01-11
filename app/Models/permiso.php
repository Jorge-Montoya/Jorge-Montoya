<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    use HasFactory;
    protected $table='permisos';
    protected $fillable=[
        'id',
        'permiso',
        'motivo'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
    protected $primarykey='id';
}
