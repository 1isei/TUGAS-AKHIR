<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
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


// middleware groupe
//admin

    Route::get('dashboard',[DashboardController::class ,'Dashboard']);
    Route::get('/mastersiswa{id_siswa}/hapus',[SiswaController::class , 'hapus'])->name('mastersiswa');
    Route::resource('/masterproject' , ProjectController::class);
    Route::resource('/mastersiswa', SiswaController::class );
    Route::resource('/mastercontact', KontakController::class);
    Route::resource('/admin', AdminController::class);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/masterproject{id}/hapus',[ProjectController::class , 'hapus'])->name('masterproject.hapus');
    



//guess
    // Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
    // Route::get('/login', [LoginController::class, "index"])->name('login');
    // Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');






// Route::get('/',[DashboardController::class , 'Dashboard']);
// Route::get('/mastersiswa{id_siswa}/hapus',[SiswaController::class , 'hapus'])->name('mastersiswa');
// Route::resource('/masterproject' , ProjectController::class);
// Route::resource('/mastersiswa', SiswaController::class );
// Route::resource('/mastercontact', KontakController::class);
// Route::resource('/', AdminController::class);




// Route::get('/register', [RegisterController::class, "index"])->name('register');



// Route::get('/register', function () {
//     return view('admin.register');
// });