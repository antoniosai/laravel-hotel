<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;
use App\Hotel;

class RoomController extends Controller
{
    public function getAllRooms()
    {
        $room = Room::all();
        return view('frontend.room', [
            'room' => $room
        ]);
    }

    public function book($id)
    {
        $room = Room::findOrFail($id);

        return view('frontend.book', [
            'room' => $room
        ]);
    }

    public function postBooking(Request $request)
    {
        
    }
}
