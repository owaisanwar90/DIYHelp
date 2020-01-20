<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {

        $categories = Categories::all();
        return view('/categories', ['categories' => $categories]);
    }
}
