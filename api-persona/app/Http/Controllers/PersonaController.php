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

  
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $validator = validator::make($request->all(), [
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ]);

        if ($validator ->fails()) {
            $data = [
                'message' => 'Error en ingresar los datos.',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);

        }
        $persona = Persona::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono
        ]);

        if (!$persona) {
            $data = [
                'message' => 'Error al agregar una persona',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'persona' => $persona,
            'status' => 201
        ];
        return response()->json($data, 201);
    }

    public function show($id)
    {
        $persona = Persona::find($id);

        if (!$persona) {
            $data = [
                'message' => 'No se encontro a la persona',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $data = [
            'persona' => $persona,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        if (!$persona) {
            $data = [
                'message' => 'No se encontro a la persona',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = validator::make($request->all(), [
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ]);

        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;

        $persona->save();

        $data = [
            'message' => 'Se actualizo los datos de la persona.',
            'persona' => $persona,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
    

    public function destroy(persona $persona)
    {
        $persona = Persona::find($id);
        if (!$persona) {
            $data = [
                'message' => 'No se encontro a la persona',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $student->delete();

        $data = [
            'message' => 'Persona eliminada correctamente',
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}
