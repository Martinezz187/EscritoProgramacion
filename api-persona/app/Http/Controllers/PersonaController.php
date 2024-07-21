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
