<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function userList()
    {
      $users = User::paginate(50);
      // $users = User::all();
      return View('userList',compact('users'));
    }
}
