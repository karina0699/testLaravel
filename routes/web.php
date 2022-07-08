<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductosController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

Route::get('/products',[ProductosController::class, 'index'] )->middleware('auth')
-> name('products');

Route::get('products/create',[ProductosController::class, 'create'] )
 ->name('products.create');
 

 Route::post('products/create',[ProductosController::class, 'store'] )
 ->name('products.store');

 Route::resource('product', ProductosController::class);

 Route::post('logout', [ProductosController::class, 'logout'])->name('logout');


 Route::view('login', 'login')->name('login')->middleware('guest');


 Route::post('login', function(){
  
    $credentials = request()->only('email', 'password');
     
    if (Auth::attempt($credentials)){

        request()->session()->regenerate();
        
        return  redirect('products');
    
    }
    print('usuario o contraseña incorrecto');
    return  redirect('login');
});





