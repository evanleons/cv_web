<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'photo' => 'images/foto.jpg',
            'nama' => 'Evan Leonardy Sinaga',
            'lahir' => 'Tempat, Tanggal Lahir',
            'hobi' => 'Tidur',
            'lahir' => 'Bandung, 13 September 2003',
            'jk' => 'Laki-laki',
            'hobi' => 'Baca Novel',
            'agama' => 'Kristen',
            'alamat' => 'Rancaekek',
            'telp' => '089660143845',
            'email' => 'evanleons1309@gmail.com',
        ];
        return view('welcome', $data);
    }

    public function list()
    {
        return view('list');
    }
}
