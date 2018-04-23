<?php

Route::get('products', function () {
    $products = DB::select('SELECT * FROM products');
    return view('testera::products', compact('products'));
});