<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index'); // Halaman utama
    }

    public function about()
    {
        return view('portfolio.about'); // Halaman About
    }

    public function contact()
    {
        return view('portfolio.contact'); // Halaman Contact
    }
}
