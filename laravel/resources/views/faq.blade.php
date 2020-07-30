@extends('layouts.app')

@section('title')
  FAQ
@endsection

@section('content')
  <main class="container">
    <h1>Domande frequenti</h1>
    <p>
      Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai
      cercando? Contattaci e saremo felici di darti una mano.
    </p>

    @foreach ($faq as $single_faq)
      <h2>{{$single_faq['domanda']}}</h2>

      <p>{{$single_faq['risposta']}}</p>

    @endforeach


  </main>

@endsection
