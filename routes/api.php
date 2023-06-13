<?php

use App\Http\Controllers\TesisController;
use App\Http\Controllers\UploadController;
use App\Models\tesis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/archivo', [TesisController::class, 'subirarchivo']);
Route::post('/subir', [UploadController::class, 'upload']);
route::apiResource('tesis',TesisController::class);
