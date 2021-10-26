<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\ViewController;
use App\Http\Requests;

class ViewController extends Controller
{
    //
    public function index(){
        $users = DB::select('select *from products');
        return view('viewproducts',['users'=>$users]);
    }

}
?>
