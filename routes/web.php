<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HelloController;

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {

    return ('2041720005 Judha Maygustya');
});
Route::get('articles/{id}', function ($id) {

    return "Halaman artikel dengan ID : ".$id;
});