<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        //Eloquent (エロクアント)
        $values = Test::all();

        $count = Test::count();
        //dd($values);

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text','=','bbb')->get();


        //クエリビルダ
        $queryBuilder = DB::table('tests')->where('text','=','bbb')
        ->select('id','text')
        ->get();//コレクション型で確定する

        dd($values,$count,$first,$whereBBB,$queryBuilder);

    return view('tests.test', compact('values'));
    }
}
