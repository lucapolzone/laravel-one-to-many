@extends('layouts.app')

@section('title', 'Lista categorie')

@section('content')
	<section>
    	<div class="container">
            <h1>Lista categorie</h1>
			
			<table class="table mb-4">
				<thead>
					<tr>
						<th>ID</th>
						<th>Etichetta</th>
						<th>Colore</th>
						<th>Badge</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@forelse($types as $type)
						<tr>
							<td>{{ $type->id }}</td>
							<td>{{ $type->label }}</td>
							<td>{{ $type->color }}</td>
							<td>{!! $type->getBadge() !!}</td>
						</tr>

					@empty
						<tr>
							<td>
								Nessun risultato trovato
							</td>
						</tr>
					@endforelse
				</tbody>
			</table>

		</div>
@endsection