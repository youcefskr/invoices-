<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InvoicesDetaillsController;

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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('invoices',InvoicesController::class);
Route::resource('sections',SectionsController::class);
Route::resource('products',ProductsController::class);
Route::get('/add_invoice',[InvoicesController::class,'create']);
Route::get('/section/{id}',[InvoicesController::class,'getproduit']);
Route::get('/InvoicesDetails/{id}',[InvoicesDetaillsController::class,'edit']);
Route::get('View_file/{invoice_number}/{file_name}', [InvoicesDetaillsController::class,'open_file']);
Route::get('download/{invoice_number}/{file_name}', [InvoicesDetaillsController::class,'download_file']);

Route::post('delete_file', [InvoicesDetaillsController::class,'destroy'])->name('delete_file');;
Route::get('/{page}',[AdminController::class,'index']);
