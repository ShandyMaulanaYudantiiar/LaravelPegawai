<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Provinsi extends BaseController
{
    function index()
    {
        $dataProvinsi = DB::table('t_provinsi')->get();
        return view('provinsi.index', compact('dataProvinsi'));
    }
}
