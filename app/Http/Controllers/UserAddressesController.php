<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    public function index(Request $r)
    {
        return view('user_addresses.index', [
            'addresses' => $r->user()->addresses,
        ]);
    }
}
