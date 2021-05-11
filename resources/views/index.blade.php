@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Blood Pressure</h1>

        {!! $hRate->container() !!}
        {!! $sRate->container() !!}

        {!! $hRate->script() !!}
        {!! $sRate->script() !!}
    </div>

@endsection
