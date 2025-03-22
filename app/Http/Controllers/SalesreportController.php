<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesreportController extends Controller
{
   public function reportPage(){
       return view('report.sales-report');
   }
}
