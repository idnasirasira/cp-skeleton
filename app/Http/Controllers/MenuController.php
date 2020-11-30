<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Index
    function index(){
        return view('page.menu.index');
    }

    // Create

    // Update

    // Delete

    // Get Menu
    function getMenuAll(Request $request){
        
        $request->validate();
        
        dd($request);
        $menus = MenuModel::get();

        dd($menus);

        return $menus;
    }
}
