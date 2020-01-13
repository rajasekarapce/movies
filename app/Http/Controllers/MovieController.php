<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class MovieController extends Controller
{
    /**
     * Show the application movie list.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMovieList(Request $request)
    {
        $view_type = Input::get('type');
        if($view_type == 'grid'){
            return view('movielistgrid');
        } else {
            return view('movielist');
        }
        
    }

    /**
     * Show the application movie detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMovieDetail(Request $request)
    {
        return view('moviedetail');
    }

}
