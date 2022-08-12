<?php

namespace App\Http\Controllers\Portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortofolioOverviewController extends Controller
{
    public function index() {
        return view ('pages.portofolio.porto-overview');
    }
}
