<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\PageController;
use PDFMake\Pdf;


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
Route::get('/login', function () {
    return view('login',[
        "title" => "Login"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});

Route::get('/support', function () {
    return view('support',[
        "title" => "Support"
    ]);
});

//dashboard
Route::get('/',[DashboardsController::class, 'index'])->name('dashboard');

//pages get
Route::get('/pages/stock-barang',[PageController::class, 'stockB'])->name('stockB');
Route::get('/pages/penjualan',[PageController::class, 'penjualanM'])->name('penjualanM');
Route::get('/pages/{id}/edit-data-menu',[PageController::class, 'edit'])->name('editdatamenu');
Route::get('/pages/stock-barang/{id}',[PageController::class, 'delete'])->name('deletedatamenu');
Route::get('/pages/laba_rugi',[PageController::class, 'labarugi']);
Route::get('/pages/laba_rugi/view/{tanggal}',[PageController::class, 'viewlabarugi'])->name('viewlabarugi');
Route::get('/pages/pembelian-bahan',[PageController::class, 'pengeluaran'])->name('PengeluaranB');
Route::get('/account/{name}/',[PageController::class, 'show'])->name('showprofileM');
Route::post('/atur-target', [PageController::class ,'aturtarget'])->name('aturtarget');
Route::get('/pages/users',[PageController::class, 'users'])->name('usersM');
Route::get('pages/manage',[PageController::class, 'settings'])->name('settingsM');
Route::get('/account/myprofile', [PageController::class, 'showMy']);

//pages post
Route::post('/save_changes', [PageController::class,'saveChanges'])->name('saveChanges');
// Route::post('/save_changes', [ProductController::class,'saveChanges'])->name('saveChanges');
Route::post('/simpan/pengeluaran',[PageController::class, 'pengeluaranT'])->name('pengeluaranT');
Route::post('/pages/{id}/edit-data-menu',[PageController::class, 'update'])->name('updatedatamenu');
Route::post('/pages/insert-data-menu',[PageController::class, 'simpandatamenu'])->name('simpandatamenu');