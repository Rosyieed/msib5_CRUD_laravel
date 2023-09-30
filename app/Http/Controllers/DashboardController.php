<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $book_count = Book::count();
        return view('dashboard.index', compact('book_count'));
    }
}
