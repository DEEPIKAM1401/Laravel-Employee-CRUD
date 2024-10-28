<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us',[HomeController::class, 'aboutUs']);

Route::group(['prefix' => 'admin'], function(){
    Route::get('/user/{id}', function($id){
        return 'User Id <b>'.$id.'</b>';
    });
    
    Route::get('/settings', function(){
        return 'Settings';
    });
});


Route::get('/article/technology/twitter-owned-by-elon-musk', function(){
    return 'Elon musk buys the twitter in the year 2023';
})->name('article');


// Employee Routes

Route::get('/employees',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/employees/create',[EmployeeController::class,'create'])->name('employee.create');
//class,'store' -> it is a method name
Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employee.store');
// Route::get('/employees/{id}',[EmployeeController::class, 'show'])->name('employee.show');
Route::get('/employees/{employee}',[EmployeeController::class, 'show'])->name('employee.show');
Route::get('/employees/{employee}/edit',[EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employees/{employee}',[EmployeeController::class, 'destroy'])->name('employee.destroy');