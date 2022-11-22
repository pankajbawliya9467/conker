<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Config;


class BannerController extends Controller
{
    //

    public function banner(){

        $title = "banner";
        $subtitle = "banner_list";
        $api_url = config('services.api.api_url'); 
        $res=Curl::to($api_url .'admin/banner/view')
        ->get(); 
        $res=json_decode($res,true);
        if($res['status'] == 'success'){
            $data=$res['data'];
        }else{
            $data = [];
        }

        
        return view("admin/banner/banner",compact('title','subtitle','data'));
    }

    public function addbanner(){

        $title = "banner";
        $subtitle = "banner_add";

        return view("admin/banner/addbanner",compact('title','subtitle'));
    }
}
