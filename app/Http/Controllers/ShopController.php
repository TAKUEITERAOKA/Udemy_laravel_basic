<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index(){

        //一対多 親→子
        $shops = Area::find(1)->shops;
        //親←子　
        $area = Shop::find(3)->area;
        //多対多
        $route = Shop::find(1)->routes()->get();

        dd($shops,$area,$route);

    }
}
