<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/about', [AboutController::class, 'index'])->name('About');
Route::get('/contact', [ContactController::class, 'index'])->name('Contact');
Route::get('/project', [ProjectController::class, 'index'])->name('Project');


route::group(['prefix' => 'admin'], function () {
  Route::get('/', [AdminController::class, 'index'])->name('admin.index');
  Route::get('/master-siswa', [AdminController::class, 'masterSiswa'])->name('admin.masterSiswa');
  Route::get('/master-contact', [AdminController::class, 'masterContact'])->name('admin.masterContact');
  Route::get('/master-contact-type', [AdminController::class, 'masterContactType'])->name('admin.masterContactType');
  Route::get('/master-project', [AdminController::class, 'masterProject'])->name('admin.masterProject');
});
