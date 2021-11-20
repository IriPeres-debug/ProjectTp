<?php

use App\Http\Controllers\CadastroController;
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

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/photos', function () {
    return view('site.photos');
})->name('site.photos');

// Route::get('/login', function () {
//     return view('site.login');
// })->name('site.login');

Route::get('/contact', [CadastroController::class, 'create']);
Route::post('/contact/new', [CadastroController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
