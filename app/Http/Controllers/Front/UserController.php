<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {

    }
    public function showUserName(){
        return "Ahmed Emam";
    }
    public function getIndex(){
//        $data = [];
//        $data['id'] = 5;
//        $data['name'] = "Ahmed";
        $obj = new \stdClass();
        $obj->id = 5;
        $obj->name = "mohamed";
        $obj->male = "male";
        $data = [ 'a' => "ahmed", 'b' => "emam"];
        $data2 = [];
        //return view('welcome', $data)->with('data2', 5);
        //return view('welcome', compact('obj'));
        return view('welcome', compact('data2','data'));

    }
}
?>
