<?php

use App\Http\Controllers\FirstAPI;
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

Route::get("test/{id?}",[FirstAPI::class, 'firstapi']); // question mark (?) for make id optional


Route::get("show", [FirstAPI::class, 'api_data_show']); // for show data through api

Route::post("create", [FirstAPI::class, 'create']); // for create data through api

Route::put("update", [FirstAPI::class, 'update']); //for update data through api
