<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["prefix" => 'todo'], function() {
    route::get('index', [TodoController::class, 'index']);
    route::get('all-data', [TodoController::class, 'all']);
    route::post('store', [TodoController::class, 'store']);
    route::get('show/{id}', [TodoController::class, 'show']);
    route::post('update/{id}', [TodoController::class, 'update']);
    route::get('delete/{id}', [TodoController::class, 'destroy']);

});

