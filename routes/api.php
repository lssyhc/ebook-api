<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SiswaController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Halo
// Route::get('halo', function () {
//     return ['me' => 'Guanteng'];
// });

// Siswa
// Route::get('/api/siswa', [SiswaController::class, 'index']);
// Route::get('/api/siswa/{id}', [SiswaController::class, 'show']);
// Route::post('/api/siswa', [SiswaController::class, 'store']);
// Route::put('/api/siswa/{id}', [SiswaController::class, 'update']);
// Route::delete('/api/siswa/{id}', [SiswaController::class, 'destroy']);

// Resource
Route::resource('halo', HelloController::class);
Route::resource('siswa', SiswaController::class);