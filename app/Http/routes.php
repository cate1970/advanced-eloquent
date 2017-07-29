<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use AdvancedELOQUENT\Book;
use AdvancedELOQUENT\Category;


Route::get('/', function () {
    $categories = Category::get();
    return view('relationship', compact('categories'));
});

Route::delete('destroy', function(Illuminate\Http\Request $request){
	$ids = $request->get('ids');
	if(count($ids)){
		Book::destroy($ids);
	}	

	return back();

});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
