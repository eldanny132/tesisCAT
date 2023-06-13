<?php

namespace App\Filters;

use App\Filters\ApiFilter;

class TesisFilter extends ApiFilter
{
    protected $safeParams = [
        'Estatus_presentacion' => ['eq'],
        'Estatus_tema' => ['eq'],
        'Nombre_alumno' =>['eq'],
        'Nombre_alumno2'=>['eq'],
        'Nombre_alumno3'=>['eq'],
        'Director'=>['eq'],
        'Codirector'=>['eq'],
        'Sinodal'=>['eq'],
        'Sinoda2'=>['eq'],
        'Titulo_de_tesis'=>['eq']
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];
}