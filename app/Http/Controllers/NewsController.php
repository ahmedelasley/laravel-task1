<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::with('user')->orderBy('created_at', 'DESC')->paginate(21);
        return view('index', compact([
            'news'
        ]));
    }

    public function show($slug)
    {

        $new =   News::with('user')->where('slug', $slug)->first(); 
        $news = News::with('user')->orderBy('created_at', 'DESC')->take(5)->get();

        return view('show', compact([
            'new',
            'news',
        ]));
    }



}
