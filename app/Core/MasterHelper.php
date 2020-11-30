<?php

use App\Models\MenuModel;

if (!function_exists('getMenus')) {
    function getMenus(){
        $menus = MenuModel::get();

        return $menus;
    }
}
