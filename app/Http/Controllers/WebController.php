<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Block;

class WebController extends Controller
{
  public function index()
  {
    $sliders = Block::where('name', 'slider')->get();
    return view('web.index', compact('sliders'));
  }
}
