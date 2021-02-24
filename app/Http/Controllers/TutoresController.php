<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutores;
use Illuminate\Support\Facades\DB;

class TutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('tutores/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_empresa' => 'required|min:3|max:50',
            'tipo_documento' => 'required|min:3|max:20',
            'documento_identidad' => 'required|email|email:rfc',
            'nombre_tutor' => 'required|min:5|max:40',
            'primer_apellido_tutor'=>'required|min:3|max:20',
            'segundo_apellido_tutor' => 'nullable|min:3|max:20',
            'pais_documento' => 'required|min:3|max:20',
            'provincia' => 'required|min:3|max:30',
            'municipio' => 'nullable|min:3|max:50',
            'estado' => 'required|in:activo,inactivo',
            'telefono' => 'nullable|min:3|max:15',
            'email' => 'required|email|email:rfc'
         ]);

        DB::beginTransaction();
        try {
            $nuevoTutor = new tutores();
            $nuevoTutor->nombre_empresa = $request['nombre_empresa'];
            $nuevoTutor->nombre_empresa = $request['tipo_documento'];
            $nuevoTutor->nombre_empresa = $request['documento_identidad'];
            $nuevoTutor->nombre_empresa = $request['nombre_tutor'];
            $nuevoTutor->nombre_empresa = $request['primer_apellido_tutor'];
            $nuevoTutor->nombre_empresa = $request['segundo_apellido_tutor'];
            $nuevoTutor->nombre_empresa = $request['pais_documento'];
            $nuevoTutor->nombre_empresa = $request['provincia'];
            $nuevoTutor->nombre_empresa = $request['municipio'];
            $nuevoTutor->nombre_empresa = $request['estado'];
            $nuevoTutor->nombre_empresa = $request['telefono'];
            $nuevoTutor->nombre_empresa = $request['email'];
            $nuevoTutor->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
            return back()->with('success', 'Hemos registrado tu empresa correctamente!');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    }
}
