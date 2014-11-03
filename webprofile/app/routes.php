<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('backend.layouts.main');
});






// Route::get 

// Route::group(array('before' => 'auth', 'prefix'=> 'backend'), function() {
    // Route::controller('/user', 'UserController');
    // Route::controller('/category', 'CategoryController');
    // Route::post('category/delete/{id}', ['uses' => 'CategoryController@postDelete']);
    // Route::controller('/page', 'PageController');
    // Route::controller('menu', 'MenuController');
    // Route::get('post/{slug}', ['uses' => 'PostController@getIndex']);
    // Route::controller('post', 'PostController');
    // Route::controller('halaman', 'HalamanController');
    // Route::get('logout',function(){
        // Auth::logout();
        // return Redirect::to('login');
    // });
    // Route::get('/test', function() {
        // return PAGE_STATUS_PUBLISH;
    // });
// });
