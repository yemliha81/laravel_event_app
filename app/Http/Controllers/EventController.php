<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function event_create(Request $request){
        //print_r(session()->all());
        try {
            $event = new Event();
            $event->title = $request['title'];
            $event->start = $request['start'];
            $event->end = $request['end'];
            $event->user_id = Auth::id();
            $event->save();
            return response()->json(['message' => 'Event saved successfully']);
        } catch (Exception $e) {
            // Handle the exception
            return response()->json(['error' => 'Error saving event: ' . $e->getMessage()], 500);
        }
    }

    public function event_delete(Request $request){
        $id = $request['id'];

        try {
            $event = Event::where('id', $id)->first();
            $event->delete();
            return response()->json(['message' => 'Event deleted successfully']);
        } catch (Exception $e) {
            // Handle the exception
            return response()->json(['error' => 'Error delete event: ' . $e->getMessage()], 500);
        }

    }
}
