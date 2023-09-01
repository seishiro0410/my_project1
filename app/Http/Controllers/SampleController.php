<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $sampleValue = "sample テキストです。";

        // // 参照
        // $records = DB::connection('mysql')->select("select * from items");
        // $name = $records[0]->name; // dd の処理を削除するため、$name 変数に代入する内容へ変更

        // // 追加
        // $insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'b@b','mushi','bbbbbb')");
        // dd($insertResult);

        $deleteResult = DB::connection("mysql")->delete("delete from users where id = 3");
        dd($deleteResult);

        return view("sample/index", ["sampleValue" => $sampleValue]);
    }
}
