<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'Here are all books';
    }

    public function show($title)
    {
        return 'Your book title is: ' . $title;
    }

}
