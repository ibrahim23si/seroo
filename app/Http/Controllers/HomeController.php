<?php

namespace App\Http\Controllers;
use App\Models\Produk;


class HomeController extends Controller
{
    public function index()
    {


        $pageData['dataProduk'] = produk::All();      //2. kedua
        return view('general.home',$pageData);
    }

    public function loginadmin()
    {
        return view('general.admin');
    }

    public function successadmin()
    {
        return view('dashboard');
    }
}
