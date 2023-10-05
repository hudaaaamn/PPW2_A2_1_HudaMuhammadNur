<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $data_barang = Barang::all();
        return view ('index', compact('data_barang'));
    }
}
