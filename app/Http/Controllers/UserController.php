<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
public function welcom_index(){
    $allposts = DB::table("posts")->get();
    return view('index',['allposts'=>$allposts]);
}

///////////////////////////////////////////////
    public function index (){

        $allposts = DB::table("posts")->get();

        return view('index', ['allposts' => $allposts] );

    }


    public function create(){
        return view('create_product');
    }

    public function store(Request $request){
        DB::table('posts')->insert([
        'product_name' =>$request->product_name,
        'product_price' =>$request->product_price,
        'product_Data' =>$request->product_Data,
        'product_brand' =>$request->product_brand,
        'product_Img' =>$request->product_Img
            ]);
            return redirect()->route('index');

    }

    public function show($id)
    {
        $post = DB::table('posts')->find($id);

        return view('product_details',['post'=>$post]);
    }


    public function edit($id){
        $post = DB::table('posts')->find($id);
        return view('edit_form',['post'=>$post]);
    }

    public function update(Request $request,$id)
    {
    DB::table('posts')->where('id',$id)->update([
        'product_name' =>$request->product_name,
        'product_price' =>$request->product_price,
        'product_Data' =>$request->product_Data,
        'product_brand' =>$request->product_brand,
        'product_Img' =>$request->product_Img
        ]);   

       return redirect()->route('index');


    }

    public function destroy($id){
        DB::table('posts')->where('id',$id)->delete();

        return redirect()->route('index');
    }




}
