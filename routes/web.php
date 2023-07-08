<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [NewsController::class, 'index']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    
    Route::get('/news/{slug}', [NewsController::class, 'show'])->where('slug', '[A-Za-z0-9_\-]+')->name('news.show');
});