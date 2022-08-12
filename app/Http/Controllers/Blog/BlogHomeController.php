<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogHomeController extends Controller
{
    public function index() {
        return view ('pages.blog.blog-home');
    }
}
