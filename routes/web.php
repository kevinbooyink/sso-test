<?php

use App\Http\Controllers\RegistrationController;
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

Route::get('/register', [RegistrationController::class, 'create']);
Route::post('register', [RegistrationController::class, 'store']);

// Route::get('/login', 'SessionsController@create');
// Route::post('/login', 'SessionsController@store');
// Route::get('/logout', 'SessionsController@destroy');
Route::get('/', function () {
    return view('welcome');
});
