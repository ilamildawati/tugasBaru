<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function read()
    {
        $data = User::all();
        return view('profil', [
            'id' => "id",
            'nama' => "nama",
            'deskripsi' => "deskripsi",
            'data' => $data,
        ]);
    }
}
