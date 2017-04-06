<?php

namespace App\Http\Controllers;

use App\Vuelo;
use Illuminate\Routing\Controller as BaseController;

class VueloController extends BaseController
{
  function index($id = 2) {
    $vuelo = App\Vuelo::findOrFail($id);
    return view('vuelo', ['vuelo' => $vuelo]);
  }
}
