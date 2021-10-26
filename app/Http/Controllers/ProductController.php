<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\ProductController;
use App\Http\Requests;

class ProductController extends Controller
{
    public function form(){
        return view('createproduct');
    }

    public function insert(Request $request){
        $name = $request->input('name');
        $description= $request->input('description');
        $count= $request->input('count');
        $price= $request->input('price');
        $data=array('name'=>$name,"description"=>$description,"count"=> $count, "price"=>$price);
        DB::table('products')->insert($data);
        echo "Submit successfully";

    }


    
}
