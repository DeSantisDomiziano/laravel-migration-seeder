<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $train = Train::table()
                        ->orderBy('orario_di_partenza', 'asc')
                        ->get();
        return view('home', compact('train'));
    }
}
