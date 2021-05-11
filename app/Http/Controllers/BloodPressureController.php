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

        //when pluck is used, specifies the type of field you want.
        // $bp = BloodPressure::pluck();



        // $bp = BloodPressure::pluck('rate', 'created_at');




        $bpSystolic = BloodPressure::OrderBy('created_at')->pluck('systolic', 'created_at');


        // return $bp->keys();
        // return $bp->values();



        $bpRate = BloodPressure::OrderBy('created_at')->pluck('rate', 'created_at');

        $hRate = new BloodPressureChart;
        $hRate->labels($bpRate->keys());

        //line chart
        //$chart->dataset('My Dataset 1', 'line', $bp->values());

        //bar chart
        $hRate->dataset('Systolic Rate', 'bar', $bpRate->values());





        $sRate = new BloodPressureChart;
        $sRate->labels($bpSystolic->keys());

        //line chart
        //$chart->dataset('My Dataset 1', 'line', $bp->values());

        //bar chart
        $sRate->dataset('Heart Rate', 'bar', $bpSystolic->values());



        return view('index', compact('hRate', 'sRate'));
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