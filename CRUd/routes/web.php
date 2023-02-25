<?php

use App\Http\Controllers\ServesController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


// Route::get('/serves', function () {
//     return view('serves', servesController::class);
// });

// Route::get('/create', function () {
//     return view('create',[
//          servesController::create(),
//     ]);
// });

Route::resource("/serves", ServesController::class);


