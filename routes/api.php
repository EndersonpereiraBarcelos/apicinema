<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cinema', [ApiController::class, 'allAgendamentos']);
Route::post('/cinema', [ApiController::class, 'createAgendamento']);
Route::get('/cinema/{id}', [ApiController::class, 'buscarAgendamento']);
Route::put('/cinema/{id}', [ApiController::class, 'AttAgendamento']);
Route::delete('/cinema/{id}', [ApiController::class, 'deletAgendamento']);
