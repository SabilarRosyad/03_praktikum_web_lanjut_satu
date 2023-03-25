<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanKuliahController;
use App\Http\Controllers\JadwalPerkuliahanController;

Route::get('Home', function(){
        return view('home');
    });

Route::prefix('Products')->group(function (){
    Route::get('category/marbel-edu-games', function(){
        return view('productMarbel');
    });
    Route::get('category/kolak-kids-songs', function(){
        return view('productKolak');
    });
});

    Route::get('/news', function(){
        return view('news');
    });

Route::prefix('program')->group(function (){
    Route::get('program/karir', function(){
        return view('programKarir');
    });
    Route::get('program/magang', function(){
        return view('programMagang');
    });
});

Route::get('/about-us', function(){
   return view('about-us'); 
});

Route::resource('/contact-us', ContactUsController::class)->only(["index"]);


Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/curhat', [PengalamanKuliahController::class, 'index'])->name('pengalaman_kuliah');
Route::get('/jadwalPerkuliahan', [JadwalPerkuliahanController::class, 'index'])->name('jadwalPerkuliahan');