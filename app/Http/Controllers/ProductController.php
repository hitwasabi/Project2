<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function addProduct(){
        return view('admin/product/add_product');
    }

    function save(Request $request){
        $product_id = $request->get('productId');
        $url = $request->get('url');
        $cate_name = $request->get('cateName');
        $product_name = $request->get('productName');
        $prices = $request->get('Prices');
        $product_code = $request->get('productCode');
        $product_info = $request->get('productInfo');

        DB::table('products')->insert(
            [
                'product_id' => $product_id,
                'url' => $url,
                'cate_name' => $cate_name,
                'product_name' => $product_name,
                'prices' => $prices,
                'product_code' => $product_code,
                'product_info' => $product_info,
            ]
        );
        return redirect('admin/product/index');
    }
}
