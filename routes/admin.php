<?php

use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::group(['prefix' => LaravelLocalization::setLocale() , 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
	Route::middleware(['auth' , 'isAdmin'])->prefix('admin')->group(function(){
        Route::get('/' , [DashboardController::class , 'index']);
        Route::get('users/{user}/posts' , [UsersController::class , 'showPosts'])->name('users.showposts');
        Route::resource('/users' , UsersController::class);
        Route::resource('/roles' , RolesController::class);
        Route::resource('/posts' , PostController::class);
    
        

        // Route::get('/role' , function(){
        //     $roles = Role::with([
        //         'users' => function($query){
        //             $query->select('name' , 'email' , 'role_id');
        //         }
        //     ])->get();
    
        //     return response()->json($roles);
        // });
    
    });
    

});
