<?php

namespace App\Http\Controllers;

use App\Filters\TesisFilter;
use Illuminate\Http\Request;
use App\Models\tesis;
use App\Http\Requests\StoretesisRequest;
use App\Http\Requests\UpdatetesisRequest;

class TesisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $filter = new TesisFilter;

        $filterItems = $filter->transform($request);

        $Tesis = tesis::where($filterItems);
        return $Tesis->get();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(Request $request)
    {
        tesis::create($request->all());
        return response()->json("se ha registrado");
    }*/
    public function store(Request $request)
{
    $file = $request->file('Doc_soli_tema');

    if ($file) {
        $filePath = $file->store('D:\Descargas\Proyecto_de_tesis\Solicitudes_de_tema'); // Guardar el archivo en la carpeta "documentos" (puedes cambiarlo según tus necesidades)
        $request->merge(['Ruta_solicitud_tema' => $filePath]);
    }

    Tesis::create($request->all());
    return response()->json("Se ha registrado correctamente");
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tesis = tesis::find($id);
        return response()->json($tesis);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tesis $tesis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tesis $tesis)
    {
        /*$tesis = tesis::find($tesis);
        $tesis->update($request->all());*/
        $tesis->Titulo_de_tesis=$request->Titulo_de_tesis;
        $tesis->Nombre_alumno=$request->Nombre_alumno;
        $tesis->Nombre_alumno2=$request->Nombre_alumno2;
        $tesis->Nombre_alumno3=$request->Nombre_alumno3;
        $tesis->Director=$request->Director;
        $tesis->Codirector=$request->Codirector;
        $tesis->Sinodal=$request->Sinodal;
        $tesis->Sinoda2=$request->Sinoda2;
        $tesis->Fecha_solicitud_tema=$request->Fecha_solicitud_tema;
        $tesis->Fecha_solicitada=$request->Fecha_solicitada;
        $tesis->Fecha_presentacion=$request->Fecha_presentacion;
        $tesis->Estatus_tema=$request->Estatus_tema;
        $tesis->Estatus_presentacion=$request->Estatus_presentacion;
        $tesis->Estatus_final=$request->Estatus_final;
        $tesis->Doc_tesis=$request->Doc_tesis;

        $tesis->save();
        return response()->json("se ha modificado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tesis = tesis::find($id);
        $tesis->delete();
        return response()->json("se ha eliminado");
    }

    public function subirarchivo(Request $request)
    {
        if($request->hasFile('archivo')){
            return "si";
        }else{
            return "no";
        }
        
    }
}
