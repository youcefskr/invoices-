<?php

namespace App\Http\Controllers;
use App\Models\sections;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $sections = sections::all();
        $products = products::all();
        return view('products.products', compact('sections','products'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Products::create([
            'Product_name' => $request->Product_name,
            'section_id' => $request->section_id,
            'description' => $request->description,
        ]);
        session()->flash('Add', 'تم اضافة المنتج بنجاح ');
        return redirect('/products');
    }


    public function show(products $products)
    {
        //
    }


    public function edit(products $products)
    {
        //
    }


    public function update(Request $request)
    {



     // Retrieve the section ID from the Section model


       $Products = Products::findOrFail($request->pro_id);

       $Products->update([
        'Product_name' => $request->Product_name,
        'section_id' => $request->section_id,
        'description' => $request->description,


       ]);

       session()->flash('Edit', 'تم تعديل المنتج بنجاح');
       return back();

    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy(Request $request)
    {
         $Products = Products::findOrFail($request->pro_id);
         $Products->delete();
         session()->flash('delete', 'تم حذف المنتج بنجاح');
         return back();
    }
}
