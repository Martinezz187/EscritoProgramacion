<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Validator;

class PersonaController extends Controller
{
    public function index()
    {
        $persona = Persona::all();
        if ($persona->isEmpty()) {
            return response()->json(['message' => 'No hay personas agregadas'], 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $validator = validator::make($request->all(), [
            'id' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ]);

        if ($validator ->fails()) {
            $datos = [
                'message' => 'Error en ingresar los datos.',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($datos, 400);

        }
        $persona = Persona::create([
            'id' => $request->id,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono

        ]);

        if (!$persona) {
            $datos = [
                'message' => 'Error al agregar una persona',
                'status' => 500
            ];
            return response()->json($datos, 500);
        }

        $datos = [
            'persona' => $persona,
            'status' => 201
        ];
        return response()->json($datos, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(persona $persona)
    {
        //
    }
}
