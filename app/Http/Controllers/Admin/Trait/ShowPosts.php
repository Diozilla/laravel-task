<?php
namespace App\Http\Controllers\Admin\Trait;

use App\Models\User;

trait ShowPosts{
    public function showPosts($id){
        $posts = User::findOrFail($id)->posts;
        return response()->jason($posts);
        }




}







?>