<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tesis extends Model
{
    use HasFactory;

    protected $fillable=[
        'Titulo_de_tesis',
        'Nombre_alumno',
        //'Nombre_alumno2',
        //'Nombre_alumno3',
        'Director',
        //'Codirector',
        //'Sinodal',
        //'Sinoda2',
        //'Fecha_solicitud_tema',
        //'Fecha_solicitada',
        //'Fecha_presentacion',
        //'Estatus_tema',
        //'Estatus_presentacion',
        //'Estatus_final'     
    ];

    protected $hidden=[
        'created_at',
        'update_at'
    ];
}

