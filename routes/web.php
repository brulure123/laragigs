<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// All listings 
Route::get('/', [ListingController::class, 'index']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Common Resource Routes;
// index - Show all listings
// show - Show single listing
// create - Show form to create a new listing
// store - Store new listing
// edit - Show form edit listin
// update - Update listing
// destroy - Delete listing


/*
Don't need it anymore but can help for reference !

Route::get('/hello', function()  {
    return response('<h1>Hello World</h1>', 200)
     ->header('Content-Type', 'text/plain')
     ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id) {
    return response('Post : ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    return($request->name . ' - ' . $request->city );
});

*/