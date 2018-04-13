<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Requests;

class BlogController extends MainController
{
    public function index(Blog $blog)
    {
        $this->data['records'] = $blog->getActive();
        return view('blog.index', $this->data);
    }

    public function cart(Blog $blog, $slug)
    {
        $this->data['record'] = $blog->getBySlug($slug);
        return view('blog.cart', $this->data);
    }
}
