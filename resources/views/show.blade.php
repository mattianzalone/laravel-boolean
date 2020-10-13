@extends('layouts.app')
@section('titolo','show')
@section('content')
<div class="card-group container">
        <div class="card">
        <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
            <div class="card-body">
                <h5 class="card-title">{{$student['nome']}}</h5>
                <h6>Assunt{{ ($student['genere'] == 'f') ? 'a' : 'o'}} da {{ $student['azienda']}}</h6>
                <p class="card-text">{{$student['descrizione']}}</p>
                <p class="card-text"><small class="text-muted">{{$student['anni']}}</small></p>
            </div>
        </div>
  </div>
@endsection