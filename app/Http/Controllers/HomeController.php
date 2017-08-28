<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
  public function uppercase($string)
  {
    $data['string'] = $string;
    $data['upperCase'] = strtoupper($string);
    return view('upper',$data);
  }
}
