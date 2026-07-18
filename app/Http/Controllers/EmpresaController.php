<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // listar
        $empresas = Empresa::get(); // SELECT * from empresas
        return $empresas;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // guardar
        $empresa = new Empresa();
        $empresa->nombre = $request->nombre;
        $empresa->logo = $request->logo;
        $empresa->direccion = $request->direccion;
        $empresa->telefono = $request->telefono;
        $empresa->horarios = $request->horarios;
        $empresa->save();

        return ["mensaje" => "Empresa Registrada"];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // mostrar
        $empresa = Empresa::find($id);
        return $empresa;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // modificar
        $empresa = Empresa::find($id);
        $empresa->nombre = $request->nombre;
        $empresa->logo = $request->logo;
        $empresa->direccion = $request->direccion;
        $empresa->telefono = $request->telefono;
        $empresa->horarios = $request->horarios;
        $empresa->update();

        return ["mensaje" => "Empresa Actualizada"];

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // eliminar
        $empresa = Empresa::find($id);
        $empresa->delete();

            return ["mensaje" => "Empresa eliminada"];

    }
}
