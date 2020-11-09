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

    public function getUser($id){
        return json_encode(DB::table('user')->where('id',$id)->first());
    }
    public function postUser(Request $request){
        $user = DB::table('user')->insert([
            "username" => $request->username,
            "password" => $request->password
         ]);
      
         if(!$user){
            return response(["error" => "Your error here"], 400);
         }
      
         return response(["user" => $user], 200);
    }
    public function putUser(Request $request){
        $user = DB::table('user')->update([
            "username" => $request->username,
            "password" => $request->password
        ]);

        if(!$user){
            return response(["error" => "Your error here"], 400);
        }
      
        return response(["user" => $user], 200);
    }
    public function deleteUser($id){
        $user_delete = DB::table('user')->where('id', $id)->delete();

        if(!$user_delete){
            return response(["error" => "Your error here"], 400);
        }
      
        return response(["user" => $user_delete], 200);
    }
}
