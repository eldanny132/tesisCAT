<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teses', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo_de_tesis')->default("pendiente");
            $table->string('Nombre_alumno')->default("pendiente");
            $table->string('Nombre_alumno2')->default(null)->nullable(true);
            $table->string('Nombre_alumno3')->default(null)->nullable(true);
            $table->string('Director')->default("pendiente");
            $table->string('Codirector')->default(null)->nullable(true);
            $table->string('Sinodal')->default(null)->nullable(true);
            $table->string('Sinoda2')->default(null)->nullable(true);
            $table->date('Fecha_solicitud_tema')->default(null)->nullable(true);
            $table->date('Fecha_solicitada')->default(null)->nullable(true);
            $table->date('Fecha_presentacion')->default(null)->nullable(true);
            $table->string('Estatus_tema')->default("pendiente")->nullable(true);
            $table->string('Ruta_solicitud_tema')->default(null)->nullable(true);
            $table->string('Estatus_presentacion')->default("pendiente")->nullable(true);
            $table->string('Estatus_final')->default("pendiente")->nullable(true);
            $table->string('Doc_soli_tema')->default(null)->nullable(true);
            $table->string('Doc_aceptacion_tema')->default(null)->nullable(true);
            $table->string('kardex')->default(null)->nullable(true);
            $table->string('Doc_tesis')->default(null)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teses');
    }
};
