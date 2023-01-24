<?php

use App\Models\Lojas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// GET /Lojas
// Route::get('/Lojas', function () {
//     return Lojas::all();
// });

// GET /Lojas/{id}
// Route::get('/Lojas/{id}', function ($id) {
//     return Lojas::find($id);
// });

// POST /Lojas
// Route::post('/Lojas', function (Request $request) {
//     return Lojas::create($request->all());
// });

// PUT /Lojas/{id}
// Route::put('/Lojas/{id}', function (Request $request, $id) {
//     $Lojas = Lojas::findOrFail($id);
//     $Lojas->update($request->all());

//     return $Lojas;
// });

// PATCH /lojas/{id}
// Route::patch('/Lojas/{id}', function (Request $request, $id) {
//     $Lojas = Lojas::findOrFail($id);
//     $Lojas->update($request->all());

//     return $Lojas;
// });

// DELETE /Lojas/{id}
// Route::delete('/Lojas/{id}', function ($id) {
//     Lojas::find($id)->delete();

//     return 204;
// });

Route::apiResource('lojas', \App\Http\Controllers\Api\LojaController::class);


