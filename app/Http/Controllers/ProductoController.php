<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        // Listar productos
        $productos = Producto::with('empresa')->get();
        return $productos;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Guardar producto
        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->empresa_id = $request->empresa_id;

        $producto->save();

        return [
            "mensaje" => "Producto registrado"
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mostrar producto
        $producto = Producto::with('empresa')->findOrFail($id);

        return $producto;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Actualizar producto
        $producto = Producto::findOrFail($id);

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->empresa_id = $request->empresa_id;

        $producto->save();

        return [
            "mensaje" => "Producto actualizado"
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Eliminar producto
        $producto = Producto::findOrFail($id);

        $producto->delete();

        return [
            "mensaje" => "Producto eliminado"
        ];
    }

}
