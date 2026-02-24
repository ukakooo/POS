<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user() {
        return view('user')
        ->with('name', 'Angga')
        ->with('id', '244107020215');
    }
}
