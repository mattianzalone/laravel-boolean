@extends('layouts.app')
@section('titolo','home page')
@section('content')
    <div class="container jumbotron-top">
        <div class="col-6 jumbotron">
            <h1 class="display-4 font-weight-bold">Cambia la tua vita.</h1>
            <h1 class="display-4 font-weight-bold">Entra in Boolean.</h1>
            <h3 class="display-4 font-weight-bold">Segui il corso, diventi un web developer e trovi lavoro.</h3>
            <p><span class="font-weight-bold">></span> 6 mesi di corso full time, online e in diretta</p>
            <p><span class="font-weight-bold">></span> Nessuna competenza di programmazione richiesta</p>
            <p><span class="font-weight-bold">></span> Se non trovi lavoro ti rimborsiamo</p>
            <a class="btn  btn-lg font-weight-bold" href="{{route('studenti')}}" role="button">Vedi gli Studenti</a>
        </div>
    </div>
    
@endsection
