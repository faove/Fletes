@extends('layouts.app')

@section('content')

	<table class="table table-light">
		<thead>
			<tr>
				<th>#</th>
				<th>Foto</th>
				<th>Nombre y Apellido</th>
				<th>Correo</th>
				<th>Telefono</th>
				<th>Celular</th>
				<th>Dirección</th>
				<th>Fecha</th>
				<th>Comentario</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
		@foreach($fletes as $flete)	
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $flete->fotoveh }}</td>
				<td>{{ $flete->nombre }}</td>
				<td>{{ $flete->correo }}</td>
				<td>{{ $flete->telefono }}</td>
				<td>{{ $flete->celular }}</td>
				<td>{{ $flete->direccion }}</td>
				<td>{{ $flete->fecha_registro }}</td>
				<td>{{ $flete->comentario }}</td>
				<td>Editar | Borrar</td>
			</tr>
		@endforeach	
		</tbody>
	</table>
@endsection