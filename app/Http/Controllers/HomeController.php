<?php

namespace App\Http\Controllers;
use GeneaLabs\LaravelMixPanel\LaravelMixPanel;

use App\Http\Requests;
use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
        
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function news(){
        
        $mixPanel = App::make('GeneaLabs\LaravelMixPanel\LaravelMixPanel');
        $mixPanel->track('news event');
    }

    public function purchase(){
        
        $mixPanel = App::make('GeneaLabs\LaravelMixPanel\LaravelMixPanel');
        $mixPanel->track('purchase event');
    }

    public function trial(){
        
        $mixPanel = App::make('GeneaLabs\LaravelMixPanel\LaravelMixPanel');
        $mixPanel->track('trial event');
    }
}
