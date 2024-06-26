<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dataTabel() {
        $data = ['meja', 'kursi', 'lampu', 'pintu', 'buku', 'pensil', 'bolpoin'];
        // return view('table', ['data' => $data]);
        return view('table', compact('data'));
    }
}
