<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotel = Hotel::all();
        return view('frontend.index', [
            'hotel' => $hotel
        ]);
    }


    public function location()
    {
        return view('frontend.location');
    }

    public function facilities()
    {
        $hotel = Hotel::all()->first();

        return view('frontend.facilites', [
            'hotel' => $hotel
        ]);
    }
}
