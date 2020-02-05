<html>
<head>
	<title>Mi Web</title>
</head>
<body>
	@extends('layouts.master')
	@section('content')
		<div class="row">

				<div class="col-sm-4">
					<img src="{{$pelicula->poster}}">
				</div>
				<div class="col-sm-8">
					<h4>{{$pelicula->title}}</h4>
					<h6>Año: {{$pelicula->year}}</h6>
					<h6>Director: {{$pelicula->director}}</h6>
					<br><br>
					<p><strong>Resumen</strong>: {{$pelicula->synopsis}}</p>
					<p>
						<strong>Estado</strong>: 
						@if ($pelicula->rented == true)
							Película actualmente alquilada
							<br><br>
							<button type="button" class="btn btn-danger">Devolver pelicula</button>
							
						@else
							Película disponible
							<br><br>
							<button type="button" class="btn btn-primary">Alquilar pelicula</button>

						@endif
						<a type="button" class="btn btn-warning"  href="{{url('catalog/edit/'.$pelicula->id)}}">Editar película</a>
							<a type="button" class="btn" href="{{url('/')}}">Volver al listado</a>
					</p>
				</div>

		</div>
	@stop

	
</body>
</html>