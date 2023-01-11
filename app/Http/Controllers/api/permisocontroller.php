<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\permiso;
use Illuminate\Http\Request;

class permisocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return permiso::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $permiso=new permiso;
        $permiso->permiso=$request->permiso;
        $permiso->motivo=$request->motivo;
        $permiso->save();
    }

    /**
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
        $permiso=permiso::find($id);
        $permiso->permiso='jorge alejandro';
        $permiso->motivo='Hombre';
        $permiso->save();
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
        $permiso= permiso::find($id);
        $permiso->delete();
    }
}
