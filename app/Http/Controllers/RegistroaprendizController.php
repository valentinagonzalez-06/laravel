<?php

namespace App\Http\Controllers;

use App\Models\Registroaprendiz;
use Illuminate\Http\Request;

class RegistroaprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['aprendizregistro']=Registroaprendiz::paginate(5);
        
        return view('aprendizregistro.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('aprendizregistro.create');
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
       //$datosregistro=request()->all();

       $datosaprendizregistro=request()->except('_token');

       
       Registroaprendiz::insert($datosaprendizregistro);

       if($request->hasFile('foto')) {

        $datosaprendizregistro['foto']=$request->file('foto')->store('uploads','public');


       }

       return response()->json($datosaprendizregistro);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registroaprendiz  $registroaprendiz
     * @return \Illuminate\Http\Response
     */
    public function show(Registroaprendiz $registroaprendiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registroaprendizs  $registroaprendiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Registroaprendiz $registroaprendiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registroaprendiz  $registroaprendiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registroaprendiz $registroaprendiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registroaprendizs $registroaprendiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registroaprendiz $registroaprendizs)
    {
        //
    }
}
