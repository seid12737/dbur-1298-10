<?php
use Illuminate\Support\Facades\Route; 
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Teacherscontroller;
use App\Http\Controllers\Studentscontroller;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
                 
// for admin
  Route::post('/admin',[AdminController:: class,"create"]);
 //to dellete
 Route::delete('/admindelete/{id}',[AdminController:: class,"deletebyid"]);
// to show
 Route:: get('/adminshow',[AdminController:: class,"show"]);
 Route:: get('/adminss/{id}',[AdminController:: class,"showbyid"]);
 Route::put('/adminupdate/{id}',[AdminController:: class,"updatebyid"]);#
            
 
 // for Teacher
 Route::post('/teacher',[Teacherscontroller:: class,"create"]);
 //to dellete
 Route::delete('/teachersdelete/{id}',[Teacherscontroller:: class,"deletebyid"]);
// to show
 Route:: get('/teachersshow',[Teacherscontroller:: class,"show"]);
 Route:: get('/teachersbyid/{id}',[Teacherscontroller:: class,"showbyid"]);
 Route::put('/teachersupdate/{id}',[Teacherscontroller:: class,"updatebyid"]);#


 //for  student
Route::post('/students',[Studentscontroller:: class,"create"]);
//to dellete
Route::delete('/studentsdelete/{id}',[Studentscontroller:: class,"deletebyid"]);
// to show
Route:: get('/studentsshow',[Studentscontroller:: class,"show"]);
Route:: get('/studentsbyid/{id}',[Studentscontroller:: class,"showbyid"]);
Route::put('/studentsupdate/{id}',[Studentscontroller:: class,"updatebyid"]);#

           