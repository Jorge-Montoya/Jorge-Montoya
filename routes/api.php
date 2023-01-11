<?php

use App\Http\Controllers\api\usuarioControler;
use App\Http\Controllers\api\permisocontroller;
use App\Http\Controllers\api\rolcontroller;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('usuarios', [usuarioControler::class,'index']);
Route::post('roles', [rolcontroller::class,'index']);
Route::post('permisos', [permisocontroller::class,'index']); 
Route::post('usuarios/datos',[usuarioControler::class,'datos']);
Route::delete('usuarios/delete/{$id}', [usuariocontroller::class,'delete']);
Route::get('usuario/update/{id}', [usuarioControler::class,'update']);
Route::get('usuarios/insert/{$nombre},{$sexo},{$organizacion},{$direccion}',[usuarioControler::class,'index']);
Route::get('roles/delete/{$id}', [rolcontroller::class,'delete']);
Route::get('roles/update/{$id}', [rolControler::class,'update']);
Route::get('roles/insert',[rolControler::class,'index']);
Route::get('permiso/delete/{$id}', [permisocontroller::class,'delete']);
Route::get('permiso/update/{$id}', [permisoControler::class,'update']);
Route::get('permiso/insert',[permisoControler::class,'index']);