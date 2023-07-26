<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::orderBy('created_at', 'ASC')->get()->all();
        return view('view.index', [
            'pegawais' => $pegawais
        ]);
    }
}
