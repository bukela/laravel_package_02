<?php

namespace Mirko\Testera;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TesteraController extends Controller
{
    public function index(){
        $products = DB::select('SELECT * FROM products');
        return view('testera::products', compact('products'));
    }
}
