<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfGenerate;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PdfUploadMongo;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//PDF Yarat
Route::post('pdf/yataygecis', [PdfGenerate::class, 'yatay_gecis_create'])->name('yataygecis');
Route::post('pdf/dersinitabak', [PdfGenerate::class, 'ders_intibaki_create'])->name('dersinitabak');
Route::post('pdf/cap', [PdfGenerate::class, 'cap_create'])->name('cap');
Route::post('pdf/dgs', [PdfGenerate::class, 'dgs_create'])->name('dgs');
Route::post('pdf/yazders', [PdfGenerate::class, 'yaz_create'])->name('yazders');


//Form
Route::get('form/cap', [FormController::class, 'cap'])->name('formCap');
Route::get('form/yaz', [FormController::class, 'yaz'])->name('formYaz');
Route::get('form/dgs', [FormController::class, 'dgs'])->name('formDgs');
Route::get('form/ders', [FormController::class, 'ders'])->name('formDers');
Route::get('form/yataygecis', [FormController::class, 'yatay'])->name('formYatay');

//PDF Upload

Route::post('upload/pdf', [PdfUploadMongo::class, 'upload'])->name('upload_pdf');
