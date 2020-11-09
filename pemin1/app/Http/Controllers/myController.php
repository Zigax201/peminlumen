<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index(){
        return "Test Laravel";
    }

    public function date(){
        $date = DB::table('time')->get();
        return json_encode($date);
    }
}
