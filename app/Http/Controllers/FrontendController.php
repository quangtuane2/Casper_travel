<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function ThienVienTrucLam(){
        return view('frontend.ThienVienTrucLam');
    }

    public function TuDucTemple(){
        return view('frontend.TuDucTemple');
    }

    public function ThienMuPagoda(){
        return view('frontend.ThienMuPagoda');
    }

    public function hue(){
        return view('frontend.hue');
    }

    public function combo1(){
        return view('frontend.combo1');
    }

    public function booking(){
        return view('frontend.booking');
    }
}

?>