<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts', [PostController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
return "Hello, World!";
});

// Route::get('/user/{id}', function ($id) {
//  return "User ID: " . $id;
//  });

Route::get('/user/{name?}', function ($name = "Guest") {
    return "Hello, " . $name;
    });

Route::get('/dashboard', function () {
     return view('dashboard');
    })->name('dashboard');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
    return "Admin Dashboard";
    });
    Route::get('/users', function () {
    return "Admin Users";
    });
    });

    Route::get('/link', function () {
        return view('test');
    });
Route::post('/data', function () { return "POST Request"; });
Route::put('/data', function () { return "PUT Request"; });
Route::delete('/data', function () { return "DELETE Request"; });
Route::patch('/data', function () { return "PATCH Request"; });


