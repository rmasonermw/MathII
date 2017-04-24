<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});


*/

Route::get('/', 'General@index'); // use the csmp controller and call index

Route::get('/math', 'Math@index');// use the csmp controller and call about

Route::get('/math/add/{x}/{y}', 'Math@add')->where(['x'=>'[0-9]*','y'=>'[0-9]*']);
Route::get('/math/subtract/{x}/{y}', 'Math@subtract')->where(['x'=>'[0-9]*','y'=>'[0-9]*']);
Route::get('/math/multiply/{x}/{y}', 'Math@multiply')->where(['x'=>'[0-9]*','y'=>'[0-9]*']);
Route::get('/math/divide/{x}/{y}', 'Math@divide')->where(['x'=>'[0-9]*','y'=>'[0-9]*']);

Route::get('/functions', 'Functions@index');
Route::get('/functions/sqrt/{x}', 'Functions@sqrt')->where('x', '[0-9]*');
Route::get('/functions/log/{x}', 'Functions@log')->where('x', '[0-9]*');

Route::get('/constants/PI', 'General@pI');
Route::get('/constants/e/{integer}', 'General@e')->where('integer', '[0-9]*');

Route::get('/random', 'General@random');
Route::get('/random/{low}/{high}', 'General@randomLowHigh')->where(['low'=>'[0-9]*','high'=>'[0-9]*']);
Route::get('/random/{highOnly}', 'General@randomHigh')->where('integer', '[0-9]*');

/*
 * /                Gives this screen
 * /math/add/x/y    Adds x and y, x and y must be integers. /math/add/3/4 gives 7
 * /math/subtract/x/y
 * /math/multiply/x/y
 * /math/divide/x/y
 * /function/sqrt/x
 * /function/log/x  Natural log of x
 * /constant/PI     Prints PHP's version of PI
 * /constant/e      Prints PHP's version of the constant e
 * /random          Generates a random integer
 * /random/low/high Random integer in the range low and high, where low and hi are integers
 * /random/high     Random integers in the range 1 though high
 *
 *
 */