<?php

namespace App\Http\Controllers;

use App\Models\HotelInfo;
use Illuminate\Http\Request;

class HotelInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guest=new HotelInfo;
        $guest->fname="yasaman";
        $guest->lname="golzari";
        $guest->room_number="12";
        $guest->save();

        /*$all_guests=HotelInfo::all();*/
        /*$guest=HotelInfo::where('id', '=', '9')->get();*/

        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HotelInfo $hotelInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HotelInfo $hotelInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HotelInfo $hotelInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HotelInfo $hotelInfo)
    {
        //
    }
}
