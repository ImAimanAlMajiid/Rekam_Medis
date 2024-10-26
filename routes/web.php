<?php

use Illuminate\Support\Facades\Route;
use App\controllers\IdentitasController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IdentitasController as ControllersIdentitasController;

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

// Route::get('/', function () {
//     return view('identitas');
// });

// Route::get('/signifikan', function () {
//     return view('signifikan');
// });

route::get('/', [ControllersIdentitasController::class, 'identitas']);
route::get('/signifikan', [ControllersIdentitasController::class, 'signifikan']);
route::get('/tambahidentitas', [ControllersIdentitasController::class, 'tambahidentitas']);
route::get('/tambahsignifikan', [ControllersIdentitasController::class, 'tambahsignifikan']);
Route::post('signature-pad', [ControllersIdentitasController::class, 'save'])->name('signpad.save');



Route::get('/persetujuan', function (){
    return view('persetujuan');
});

Route::get('/datapersetujuan', function (){
    return view('tambahdatapersetujuan');
});





