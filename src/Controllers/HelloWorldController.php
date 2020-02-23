<?php

namespace Terrarium\HelloWorld\Controllers;

use Illuminate\View\View;
use Pterodactyl\Http\Controllers\Controller;

class HelloWorldController extends Controller {
    /**
     * Show the index view.
     *
     * @return View
     */
    public function index()
    {
        return view('helloworld::index');
    }
}