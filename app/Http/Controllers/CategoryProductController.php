<?php

namespace App\Http\Controllers;

use App\Models\Category_product;
use App\Http\Requests\StoreCategory_productRequest;
use App\Http\Requests\UpdateCategory_productRequest;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_product = Category_product::orderBy('id')->get();
        return response()->json([
            'status' => 'success',
            'message' => 'Success Get All Category Product',
            'data' => $category_product
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategory_productRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory_productRequest $request)
    {
        $category_product = Category_product::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully Create New Category Product',
            'data' => $category_product
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function show(Category_product $category_product)
    {
        $category_product->find($category_product->id);
        if (!$category_product) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Category Product Not Found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Success Get Category Product',
            'data' => $category_product
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_product $category_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategory_productRequest  $request
     * @param  \App\Models\Category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory_productRequest $request, Category_product $category_product)
    {
        $category_product->update($request->all());

        if (!$category_product) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Product not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Success update category product',
            'data' => $category_product
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_product  $category_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_product $category_product)
    {
        $category_product->delete();

        if (!$category_product) {
            return response()->json([
                'status' => 'faield',
                'message' => 'Category product not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully deleted category product'
        ], 200);
    }
}
