<?php



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return view('master');
});

Route::get('/add', function () {
    return view('add');
});

use App\Http\Controllers\TugasController;
Route::post('/', ['uses' => 'TugasController@show_by_admin']);
Route::get('/', [TugasController::class, 'show_by_admin']);
Route::post('/add_process', [TugasController::class, 'add_process']);
Route::get('/edit/{id}', [TugasController::class, 'edit']);
Route::get('/admin', [TugasController::class, 'show_by_admin']);
Route::post('/edit_process', [TugasController::class, 'edit_process']);
Route::get('/delete/{id}', [TugasController::class, 'delete']);
Route::get('/cari', [TugasController::class, 'cari']);



