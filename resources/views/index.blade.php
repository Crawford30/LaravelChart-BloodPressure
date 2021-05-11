@extends('layouts.app')

@section('content')



    <div class="container">
        <h1 class="text-5xl font-bold">Blood Pressure</h1>

        <div class="flex pt-8">
            <div class="w-1/2">
                {!! $hRate->container() !!}
            </div>


            <div class="w-1/2 px-8 pt-12">
                <h2 class="font-bold text-2xl">Some Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos doloribus officiis voluptate veniam,
                    architecto eum at mollitia quos inventore ipsa sit, excepturi cum reiciendis temporibus? Quisquam
                    obcaecati laudantium expedita in.</p>
                {{-- <p>https://www.youtube.com/watch?v=tBf4AUZM87A&list=PLylMDDjFIp1C3qRVKbj30i-l9S-PBz5bx&index=4</p> --}}
            </div>
            {{-- <div class="w-1/2">
                {!! $sRate->container() !!}
            </div> --}}
        </div>




        {!! $hRate->script() !!}
        {{-- {!! $sRate->script() !!} --}}
    </div>

@endsection
