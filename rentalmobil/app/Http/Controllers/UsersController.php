<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari tabel users
        $users = User::all();

        // Kirim data pengguna ke view 'users.index'
        return view('users.index', compact('users'));
    }
}