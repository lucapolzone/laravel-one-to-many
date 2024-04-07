@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Modifica il progetto</h1>
            <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                  <label class="form-label" for="title">Titolo progetto</label>
                  <input class="form-control" type="text" id="title" name="title" value="{{ $project->title }}">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="content">Descrizione progetto</label>
                  <input class="form-control" type="text" id="content" name="content" value="{{ $project->content }}">
                </div>

                <div class="mb-3">
                    <label for="select" class="form-label">Categoria</label>
                    <select id="select" class="form-select">
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                </div>

                
                <button type="submit" class="btn btn-success">Salva</button>
              </form>

        </div>
    </section>
@endsection
