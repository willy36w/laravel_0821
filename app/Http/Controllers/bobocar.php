<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class Bobocar extends Controller
{
    public function function1()
    {

        $data = DB::table('db_laravel_0821')->get();
        dd($data);
    }
}
