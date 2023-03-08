<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;

Route::group(['middleware' => ['adb']], function(){
    Route::get('clientes', [ControladorAdmin::class, 'clientes'])->name('admin.clientes');
});

Route::group(['middleware' => ['adb']], function(){
    Route::get('facturacion', [ControladorAdmin::class, 'facturacion'])->name('admin.facturacion');
});

Route::group(['middleware' => ['adb']], function(){
    Route::get('contabilidad', [ControladorAdmin::class, 'contabilidad'])->name('admin.contabilidad');
});
