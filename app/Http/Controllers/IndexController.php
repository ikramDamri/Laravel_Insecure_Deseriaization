<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function indexPage(Request $request) {
        $serializedInfo = $request->input('info');

        $info = unserialize($serializedInfo);

        if( !isset($info->name) || !isset($info->name) ) {
            $info = new \stdClass();
            $info->name = 'Dummy Name';
            $info->age = 999;
        }

        return "{$info->name} ({$info->age})";
    }
}
