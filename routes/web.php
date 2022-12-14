<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\EpisodesController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    $articles=App\Models\Article::get();
    return view('dashboard',compact('articles'));
})->middleware(['auth'])->name('dashboard');

Route::get('/articles/{article:slug}', ArticlesController::class);
Route::get('/episodes/{episode:slug}', EpisodesController::class);

require __DIR__.'/auth.php';
