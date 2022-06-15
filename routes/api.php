<?php

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

/*
Symply reference for making REST API Routes.

Route::get('/posts', function(){
    return response()->json([
        'posts' => [
            'title one' => 'Post One',
            'title two' => 'Post Two',
            'title free' => 'Post Free'
        ]
    ]);
});
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
