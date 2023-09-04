<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Createcontrollesr;

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
    return view('welcome');
});
Route::get('/insert', [Createcontrollesr::class, 'create_view']);
Route::post('/create', [Createcontrollesr::class, 'create']);
// Route::get('insert','Createcontrollesr@create_view');
// Route::post('create','Createcontrollesr@create');