<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\usuario;
use Illuminate\Http\Request;

class usuarioControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$nombre,$sexo,$organizacion,$direccion)
    {
        //
        $usuario=new usuario;
        $usuario->nombre=$request->$nombre;
        $usuario->sexo=$request->$sexo;
        $usuario->organizacion=$request->$organizacion;
        $usuario->direccion=$request->$direccion;
        $usuario->save();
    }
  /*  $usuario=usuario::create([
        'nombre'=>'Cardiel'
    ])
    *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $usuario=usuario::find($id);
        $usuario->nombre='jorge alejandro';
        $usuario->sexo='Hombre';
        $usuario->organizacion='utt';
        $usuario->direccion='micasaaaaaaa';
        $usuario->save();
    }
    public function datos(){
        return usuario::select('usuarios.id','usuarios.nombre','usuarios.sexo','usuarios.organizacion','usuarios.rol')
        ->join(
            'rol',
            'usuarios.rol',
            '=',
            'rol.id'
        );
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario= usuario::find($id);
        $usuario->delete();
    }
}
