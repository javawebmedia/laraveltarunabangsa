<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// panggil model
use App\Models\Users;

class UserController extends Controller
{
    // index
    public function index()
    {
        $user   = Users::orderBy('id_user','ASC')->get();

        $data = [   'title'     => 'Data Pengguna Sistem',
                    'user'      => $user,
                    'content'   => 'admin/user/index'
                ];
        return view('admin/layout/wrapper', $data);
    }
}
