<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return View('web.index',["titulo"=>"Museo UNSAAC"]);
    }
    public function solicitudes()
    {
        return View('web.solicitud');
    }
}