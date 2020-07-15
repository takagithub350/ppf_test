<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{

    public function index() {
        $users = User::latest()->get();
        return view('index', ['users' => $users]);
    }

    public function confirm(User $user) {
        return view('confirm', ['user' => $user]);
    }

}