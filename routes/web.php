<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\{
    HomeController
};
  
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
  
//--USER ROUTES
Route::middleware(['auth', 'user-types:user'])->group(function () {
  
    Route::get('/dashboard', [HomeController::class, 'userDashboard'])->name('user-dashboard');
});
  
//--ADMIN ROUTES
Route::middleware(['auth', 'user-types:admin'])->group(function () {
  
    Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin-dashboard');
});
  
//--MANAGER ROUTES 
Route::middleware(['auth', 'user-types:manager'])->group(function () {
  
    Route::get('/manager/dashboard', [HomeController::class, 'managerDashboard'])->name('manager-dashboard');
});

//--EDITOR ROUTES
Route::middleware(['auth', 'user-types:editor'])->group(function () {
  
    Route::get('/editor/dashboard', [HomeController::class, 'editorDashboard'])->name('editor-dashboard');  
});