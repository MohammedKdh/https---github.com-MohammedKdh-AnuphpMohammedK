<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Alert;

class CategoryController extends Controller
{
    public function GetIndex(){
        $categories=Category::all();
        return view('categories.index', compact('categories'));
    }

    public function storeCategory(StoreCategoryRequest $request){
       try {
        Category::create([
            'name'=>$request->Catname,
            'description'=>$request->CatDesc
        ]);
        Alert::success('Success', 'Category added successfully');
        return \redirect()->route('category.index');
       } catch (\Throwable $th) {
        Alert::error('Error', $th->getMessage());
        return \redirect()->route('category.index');
       }
    }

    public function updateCategory(Request $request){

    }
}
