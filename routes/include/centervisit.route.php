<?php 
Route::group(['prefix' => 'admin/centervisit' ,'namespace' => 'Admin','middleware' => 'auth'],function() {
/* ---- Center vist ---- */
Route::resource('center.visit', 'CenterVisitController', [
  'only' => ['index', 'create', 'store', 'edit' ]
]);
Route::get('', ['as' => 'centervisit.index', 'uses' => 'CentervisitController@index' ]);
Route::get('centervisit/create', ['as' => 'centervisit.create', 'uses' => 'CentervisitController@create' ]);
Route::post('centervisit/store', ['as' => 'centervisit.store', 'uses' => 'CentervisitController@store' ]);
Route::get('centervisit/edit/{id}', ['as' => 'centervisit.edit', 'uses' => 'CentervisitController@edit' ]);
Route::post('centervisit/update/{id}', ['as' => 'centervisit.update', 'uses' => 'CentervisitController@update' ]);
Route::match(['get','post'],'centervisitdelete', ['as' => 'centervisitdelete', 'uses' => 'CentervisitController@delete' ]);

});