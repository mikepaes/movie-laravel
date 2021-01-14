@extends('layouts.app')

@section('title', 'List')

@section('content')
    <div class="row">
        @foreach($movies as $movie)
            <div class="col col-sm-3 mb-3">
                <div class="card" onclick="window.location.href = '{{url("movie/" . $movie->id)}}'">
                    <img class="card-img-top" src="{{$movie->image}}" alt="{{$movie->name}}" style="max-height: 200px">
                    <div class="card-body px-2">
                        <h5 class="card-title">{{$movie->name}}</h5>
                    </div>
                    <div class="card-body px-2">
                        <p class="card-text">{{$movie->resume}}</p>
                        <p class="text-right">Rating <strong>{{$movie->rating}}</strong></p>
                        <p class="text-right">{{$movie->writers}}</p>
                        <div class="text-center">
                            <a href="{{url("movie/" . $movie->id)}}" class="card-link">Exibir mais</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

<b></b>
