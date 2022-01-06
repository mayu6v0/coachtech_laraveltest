<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($room = "建物です")
    {
        return "部屋番号は".$room."です";
    }
}
