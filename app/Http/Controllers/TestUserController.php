<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestUserController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::all();
        return view('usuarios', ['usuarios' => $users]);
    }
}
