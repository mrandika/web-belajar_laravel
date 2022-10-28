<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Brand;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product/index')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $warehouses = Warehouse::all();
        $brands = Brand::all();

        return view('product/create')->with([
            'warehouses' => $warehouses,
            'brands' => $brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->post('name');
        $stock = $request->post('stock');
        $price = $request->post('price');
        $warehouse_id = $request->post('warehouse_id');
        $brand_id = $request->post('brand_id');
    
        $product = new Product();
        $product->name = $name;
        $product->stock = $stock;
        $product->price = $price;
        $product->warehouse_id = $warehouse_id;
        $product->brand_id = $brand_id;
        $product->save();
        
        return redirect(route('product.index'))->withMessage('Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product/show')->with([
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $warehouses = Warehouse::all();
        $brands = Brand::all();
    
        return view('product/edit')->with([
            'product' => $product,
            'warehouses' => $warehouses,
            'brands' => $brands
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->post('name');
        $stock = $request->post('stock');
        $price = $request->post('price');
        $warehouse_id = $request->post('warehouse_id');
        $brand_id = $request->post('brand_id');
    
        $product = Product::findOrFail($id);
        $product->name = $name;
        $product->stock = $stock;
        $product->price = $price;
        $product->warehouse_id = $warehouse_id;
        $product->brand_id = $brand_id;
        $product->save();
        
        return redirect(route('product.index'))->withMessage('Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect(route('product.index'))->withMessage('Data berhasil dihapus!');
    }
}
