<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
{
    return response()->json($request->file('archivo'));
    if ($request->hasFile('archivo')) {
        
        $file = $request->file('archivo');
        // Aquí puedes realizar la lógica para almacenar el archivo en tu sistema de archivos o en la base de datos.
        return response()->json(['message' => 'Archivo subido correctamente']);
    }
    
    return response()->json(['message' => 'No se encontró ningún archivo'], 400);
}

}


