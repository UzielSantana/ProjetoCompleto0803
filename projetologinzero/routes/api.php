<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PapelController;




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



/* Route::post('login', [AuthController::class, 'login']); */



/*tenho aqui uma rota protegida por middleware, ela é um get e está batendo no /user  e é protegica pelo sanctun
temos que mandar um token para essa rota e ela tem que me responder o usuario logado com esse token*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout']);

Route::post('novo', [ListaController::class, 'create']);
Route::delete('delete/{id}', [ContactController::class, 'delete' ]);
Route::get('contacts', [ContactController::class, 'contacts' ]);
