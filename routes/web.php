<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;

Route::get('/', function () {
    return view('upload');
});

Route::post('/upload',[ImportController::class,'upload']);

Route::get('/hasil', function(){

    $data = \App\Models\Resi::where('status_bagging','Belum dibagging')
        ->get()
        ->groupBy('agen');

    return view('hasil',compact('data'));

});
