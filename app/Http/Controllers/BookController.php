<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function welcome () {
        return view('welcome');
    }

    public function index () {
        // fetch books data
        $books = Book::limit(10)->get();

        //dd($books);

        return view('books.index')->with('books', $books);
    }
}
