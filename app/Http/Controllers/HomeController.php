<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $events = Event::where('user_id', Auth::id())->get()->toArray();
        //dd($events);
        return view('dashboard', compact('events'));
    }
}
