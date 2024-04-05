@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Dettaglio progetto</h1>
            {{-- @dump($projects) --}}

            <p><strong>Titolo: </strong>{{ $project->title }}</p>
            <p><strong>Tipo di progetto: </strong>{{ $project->type->label }}</p>
            <p><strong>Descrizione: </strong>{{ $project->content }}</p>

        </div>
    </section>
@endsection
