<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class SearchController extends Controller
{
    // public function index()
    // {
    //     return view('welcome');
    // }

    // public function search(Request $request)
    // {
    //     $searchTerm = $request->input('search');

    //     $items = Item::where('name', 'like', "%$searchTerm%")->get();

    //     return view('search', ['items' => $items]);
    // }

    public function ProductListAjax(){
        $products = Item::select('name')->get();
        $data = [];

        foreach($products as $item){
            $data[] = $item['name'];
        }
        return $data;
    }

    public function SearchProduct(Request $request){

        $searched_product = $request->name;
        $products = Item::select('name')->where('name','LIKE',"%$searched_product%")->get();
        return view('search_page',compact('products'));

        // $product = Item::where("name","LIKE","%$searched_product%")->first();

        // return view('search_page',compact('product'));

        // if($searched_product != ""){
        //     $product = Item::where("name","LIKE","%$searched_product%")->first();

        //     if($product){
        //         // return redirect('category/'.$product->category->slug.'/'.$product->slug);
        //         return redirect()->back();
        //     }else{
        //         return redirect()->back()->with("status","No products method your search");
        //     }
        // }else{
        //     return redirect()->back();
        // }

    }


}
