<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function index()
    {
        $data = DB::table('airco')->count();
        return view('admin.index', compact('data'));
    }
}