<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function userList()
    {
    $users = User::all();
        dd($users);
    }
}
