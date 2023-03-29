<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = DB::table("products")->get();
        return view('products.index', ['products' => $data]);
    }

    public function delete($id)
    {
        $delete = DB::table("products")
            ->where("id", "=", $id)
            ->delete();
        return redirect("/products")->with("success", "Product deleted successfully");
    }

    public function addProduct()
    {
        return view('products.add');
    }

    public function saveProduct(Request $req)
    {
        // dd($req);
        $validated = $req->validate([
            "description" => ["required", "min:3"],
            "quantity" => ["required"],
            "price" => ["required"],
        ]);

        $data = Product::create($validated);
        return redirect("/products")->with("success", "Product Added Successfully");
    }

    public function editProduct($id)
    {
        $data = Product::findOrFail($id);
        return view("products.edit", ["product" => $data]);
    }

    public function updateCustomer(Request $req)
    {
        $req->validate([
            "description" => ["required", "min:3"],
            "quantity" => ["required"],
            "price" => ["required"],
        ]);

        $data = Product::find($req->id);
        $data->description = $req->description;
        $data->quantity = $req->quantity;
        $data->price = $req->price;
        $data->save();

        return redirect("/products")->with("success", "Product Edited Successfully");
    }
}
