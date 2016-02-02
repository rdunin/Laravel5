<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Post;

use Bican\Roles\Models\Role;
use App\User;

class UsersController extends Controller{
   public function getIndex()
    {
          
        // $adminRole = Role::create([
        //     'name' => 'Admin',
        //     'slug' => 'admin',
        //     'description' => '', // optional
        //     'level' => 1, // optional, set to 1 by default
        // ]);
        
        // $moderatorRole = Role::create([
        //     'name' => 'Moderator',
        //     'slug' => 'moderator',
        // ]);
          
        //User::find(1)->attachRole(1);
        
        return redirect('home');
    }
}