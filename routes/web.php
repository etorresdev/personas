<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('personas', [PersonaController::class, 'index']);
Route::post('personas', [PersonaController::class, 'store']);
Route::get('personas/{persona}', [PersonaController::class, 'show']);
Route::put('personas/{persona}', [PersonaController::class, 'update']);
Route::delete('personas/{persona}', [PersonaController::class, 'destroy']);

// Route::get('/token', function () {
//     return csrf_token();
// });
