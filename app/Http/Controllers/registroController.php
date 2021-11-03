<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroaprendizController extends Controller
{

    public function index()
     {
        return view('registro.index');
    }

    public function create()
    {
        return view('registro.create');
    }

    public function store( Request $request)
    {
        $datosregistro=request()->all();

        return response()->json($datosregistro);

    }
}