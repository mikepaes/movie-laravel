@extends('layouts.app')

@section('title', 'List')

@section('content')
    <h3 class="text-center">{{$movie->name}}</h3>
    <img src="{{$movie->image}}" alt="{{$movie->name}}" align="left" style="width:100%; max-width: 500px" class="mr-5">
    <div>
        <label class="col-form-label">Name:</label> {{$movie->name}}
    </div>
    <div>
        <label class="col-form-label">Year:</label> {{$movie->year}}
    </div>
    <div>
        <label class="col-form-label">Duration:</label> {{$movie->duration}}
    </div>
    <div>
        <label class="col-form-label">Directors:</label> {{$movie->directors}}
    </div>
    <div>
        <label class="col-form-label">Writers:</label> {{$movie->writers}}
    </div>
    <div>
        <label class="col-form-label">Stars:</label> {{$movie->show_stars}}
    </div>
    <div>
        <label class="col-form-label">Rating:</label> {{$movie->rating}}
    </div>
    <div>
        <label class="col-form-label">Sinopse:</label> {{$movie->sinopse}}
    </div>
    <div class="text-center my-5">
        <a href="{{url("")}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Voltar</a>
    </div>
@endsection

<b></b>
