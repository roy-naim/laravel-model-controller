<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
  public function index()
  {
    $movies = Movie::all(); //select all | ATTENZIONE CON LE SINGOLARI E PLURALI
    return view('welcome', compact('movies'));
  }
}
