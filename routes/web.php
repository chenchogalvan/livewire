<?php

use App\Http\Controllers\HomeController;
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
    return view('index');
})->name('index');

Route::get('/livewire-vs-jquery', function(){
    return view('jquery-livewire');
})->name('livewire.jquery');

Route::get('/dependent-dropdown', function(){
    return view('dependent-dropdown');
})->name('dependent.dropdown');

Route::get('/tables', function(){
    $titlePage = 'Table with sort and pagination';
    return view('table', [
        'title' => $titlePage
    ]);
})->name('tables');


Route::post('/contact', [HomeController::class, 'postContact'])->name('contact');
Route::post('/submit', [HomeController::class, 'submit'])->name('submit');


