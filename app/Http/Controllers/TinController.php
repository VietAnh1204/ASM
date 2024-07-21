<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function chitiet($id = 0)
    {
        $tin = DB::table('tin')->where('id', $id)->first();
        $data = ['id' => $id, 'tin' => $tin];
        return view('chitiet', $data);
    }

    public function tintrongloai($idLT = 0)
    {
        $listtin = DB::table('tin')->where('idLT', $idLT)->get();
        $data = ['idLT' => $idLT, 'listtin' => $listtin];
        return view('tintrongloai', $data);
    }
}
