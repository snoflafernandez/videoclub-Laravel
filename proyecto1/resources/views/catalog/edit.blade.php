<html>
<head>
	<title>Mi Web</title>
</head>
<body>
	@extends('layouts.master')
	@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            <strong>Modificar película</strong>
         </div>
         <div class="card-body" style="padding:30px">

            <form action="#" method="POST">
            	{{method_field('PUT')}}
               {{csrf_field()}}
               <div class="form-group">
                  <label for="title"><strong>Título</strong></label>
                  <input type="text" name="title" id="title" class="form-control" value="{{$pelicula->title}}">
               </div>

               <div class="form-group">
                  <label for="year"><strong>Año</strong></label>
                  <input type="text" name="year" id="year" class="form-control" value="{{$pelicula->year}}">
               </div>

               <div class="form-group">
                  <label for="director"><strong>Director</strong></label>
                  <input type="text" name="director" id="director" class="form-control" value="{{$pelicula->director}}">
               </div>

               <div class="form-group">
                  <label for="poster"><strong>Poster</strong></label>
                  <input type="text" name="poster" id="poster" class="form-control" value="{{$pelicula->poster}}">
               </div>

               <div class="form-group">
                  <label for="synopsis"><strong>Resumen</strong></label>
                  <textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{$pelicula->synopsis}}</textarea>
               </div>

               <div class="form-group">
                  <button type="submit" class="btn btn-primary" >
                      Modificar película
                  </button>
               </div>
            </form>

         </div>
      </div>
   </div>
</div>
	@stop
</body>
</html>