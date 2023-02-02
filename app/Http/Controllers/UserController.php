<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function viewUsers()
    {
        $users = User::all();
        return Inertia::render('Users', compact('users'));
    }
    public function createUser()
    {
        return Inertia::render('Create');
    }
    public function newRegister()
    {
        // return 1;
    }
}
