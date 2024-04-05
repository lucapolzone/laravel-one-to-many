@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Lista progetti</h1>
            {{-- @dump($projects) --}}

            <table class="table">
                <thead>
                    <th scope="col">Titolo progetto</th>
                    <th scope="col">Tipo di progetto</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Link</th>
                </thead>

                <tbody>

                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->type->label }}</td> {{-- dietro questa sintassi c'è una JOIN sul db. È possibile grazie alla relazione nei Models --}}
                            <td>{{ $project->content }}</td>
                            <td>
                                {{-- <a href="{{ $project->link }}" target="_blank">Dettagli</a> --}}
                                <a href="{{ route('admin.projects.show', $project) }}">Dettagli</a>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td>Nessun risultato</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </section>
@endsection
