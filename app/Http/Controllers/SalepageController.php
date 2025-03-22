<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalepageController extends Controller
{
    public function salePage()
    {
        return view('pages.dashboard.sale-page');
    }
}
