<?php

namespace App\Http\Controllers;

use App\BloodPressure;
use Illuminate\Http\Request;
use App\Charts\BloodPressureChart;

class BloodPressureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bp = BloodPressure::all();

        $chart = new BloodPressureChart;

        $chart->labels(['One', 'Two', 'Three', 'Four']);
        $chart->dataset('My Dataset 1', 'line', [1, 2, 3, 4]);



        return view('index', compact('chart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BloodPressure  $bloodPressure
     * @return \Illuminate\Http\Response
     */
    public function show(BloodPressure $bloodPressure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BloodPressure  $bloodPressure
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodPressure $bloodPressure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BloodPressure  $bloodPressure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodPressure $bloodPressure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BloodPressure  $bloodPressure
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodPressure $bloodPressure)
    {
        //
    }
}