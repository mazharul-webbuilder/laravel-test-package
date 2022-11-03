<?php
use Illuminate\Support\Facades\Route;
use Incevio\Package\Mazharul\Http\Controllers\TestPackageController;


Route::middleware(['web'])->prefix('crud-test')->group(function () {

    Route::get('/', [TestPackageController::class, 'index'])->name('mHome');
    Route::get('/employee/create', [TestPackageController::class, 'create'])->name('employee.create');
    Route::post('/employee/store', [TestPackageController::class, 'store'])->name('employee.store');
    Route::get('/employee/manage', [TestPackageController::class, 'manage'])->name('employee.manage');
    Route::get('/employee/edit/{id}', [TestPackageController::class, 'edit'])->name('employee.edit');
    Route::post('/employee/update/{id}', [TestPackageController::class, 'update'])->name('employee.update');
    Route::post('/employee/delete/{id}', [TestPackageController::class, 'delete'])->name('employee.delete');

});