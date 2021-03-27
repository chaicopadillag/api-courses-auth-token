<?php

use App\Http\Controllers\Api\Auth\V1\LoginController;
use App\Http\Controllers\Api\V1\CourseController as CourseV1;
use App\Http\Controllers\Api\V2\CourseController as CourseV2;
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
// rutas api
// v1
Route::apiResource('v1/courses', CourseV1::class)->only(['index', 'show', 'destroy']);

// v2
Route::apiResource('v2/courses', CourseV2::class)->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);
