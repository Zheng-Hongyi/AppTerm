<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SymbolController extends Controller
{
    //
    public function privateProtocol() {
        return view('symbol/privateProtocol');
    }

    public function memberServiceProtocol() {
        return view('symbol/memberServiceProtocol');
    }
}
