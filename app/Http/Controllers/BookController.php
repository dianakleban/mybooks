<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'Show all books!!!';
    }

    public function show($title)
    {
        return 'Your book title is: ' . $title;
    }

}
