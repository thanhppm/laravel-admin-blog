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
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/ngan-hang', 'HomeController@bank')->name('bank');

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

    Route::prefix('system')->group(function () {
    	Route::prefix('user')->group(function () {
	    	Route::get('/', 'UserController@index')
	    		->name('admin.system.user.index')->middleware('checkPermission:user-list');

	    	Route::get('create', 'UserController@create')
	    		->name('admin.system.user.create')->middleware('checkPermission:user-create');

	    	Route::post('store', 'UserController@store')
	    		->name('admin.system.user.store')->middleware('checkPermission:user-create');

	    	Route::get('edit/{id}', 'UserController@edit')
	    		->name('admin.system.user.edit')->middleware('checkPermission:user-edit');

	    	Route::post('update/{id}', 'UserController@update')
	    		->name('admin.system.user.update')->middleware('checkPermission:user-edit');

	    	Route::get('delete/{id}', 'UserController@delete')
	    		->name('admin.system.user.delete')->middleware('checkPermission:user-delete');
	    });

	    Route::prefix('role')->group(function () {
	    	Route::get('/', 'RoleController@index')->name('admin.system.role.index');
	    	Route::get('create', 'RoleController@create')->name('admin.system.role.create');
	    	Route::post('store', 'RoleController@store')->name('admin.system.role.store');
	    	Route::get('edit/{id}', 'RoleController@edit')->name('admin.system.role.edit');
	    	Route::post('update/{id}', 'RoleController@update')->name('admin.system.role.update');
	    	Route::get('delete/{id}', 'RoleController@delete')->name('admin.system.role.delete');

	    	Route::get('/', 'RoleController@index')
	    		->name('admin.system.role.index')->middleware('checkPermission:role-list');

	    	Route::get('create', 'RoleController@create')
	    		->name('admin.system.role.create')->middleware('checkPermission:role-create');

	    	Route::post('store', 'RoleController@store')
	    		->name('admin.system.role.store')->middleware('checkPermission:role-create');

	    	Route::get('edit/{id}', 'RoleController@edit')
	    		->name('admin.system.role.edit')->middleware('checkPermission:role-edit');

	    	Route::post('update/{id}', 'RoleController@update')
	    		->name('admin.system.role.update')->middleware('checkPermission:role-edit');
	    		
	    	Route::get('delete/{id}', 'RoleController@delete')
	    		->name('admin.system.role.delete')->middleware('checkPermission:role-delete');
	    });

	    Route::prefix('permission')->group(function () {
	    	Route::get('/', 'PermissionController@index')
	    		->name('admin.system.permission.index')->middleware('checkPermission:permission-list');

	    	Route::get('create', 'PermissionController@create')
	    		->name('admin.system.permission.create')->middleware('checkPermission:permission-create');

	    	Route::post('store', 'PermissionController@store')
	    		->name('admin.system.permission.store')->middleware('checkPermission:permission-create');

	    	Route::get('edit/{id}', 'PermissionController@edit')
	    		->name('admin.system.permission.edit')->middleware('checkPermission:permission-edit');

	    	Route::post('update/{id}', 'PermissionController@update')
	    		->name('admin.system.permission.update')->middleware('checkPermission:permission-edit');
	    		
	    	Route::get('delete/{id}', 'PermissionController@delete')
	    		->name('admin.system.permission.delete')->middleware('checkPermission:permission-delete');
	    });
	});
});