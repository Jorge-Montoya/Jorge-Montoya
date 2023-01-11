<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;
    protected $table='rol';
    protected $fillable=[
        'id',
        'Rol',
        'permiso'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
    protected $primarykey='id';
}
