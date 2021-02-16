<?php

namespace App\Http\Controllers;

use App\Models\Nameday;
use Illuminate\Http\Request;

class NamedaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Nameday::all();
        return view('index', compact('datas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nameday  $nameday
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Nameday::findOrFail($id);
        return view('namedays.show', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request) {
        $data = Nameday::select("id", "name")->where("name","LIKE","%{$request->get('query')}%")->get();
        return response()->json($data);
    }
}
