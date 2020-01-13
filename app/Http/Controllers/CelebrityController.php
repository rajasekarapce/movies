<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class CelebrityController extends Controller
{
    /**
     * Show the application celebrity list.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCelebrityList(Request $request)
    {
        $view_type = Input::get('type');
        if($view_type == 'grid'){
            return view('celebritylistgrid');
        } else {
            return view('celebritylist');
        }
        
    }

    /**
     * Show the application celebrity detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCelebrityDetail(Request $request)
    {
        return view('celebritydetail');
    }

}
