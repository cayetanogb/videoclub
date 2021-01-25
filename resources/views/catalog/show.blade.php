@extends('layouts.master')

@section('content')
     <div class="row">
          <div class="col-sm-4">
               <img src="{{$pelicula['poster']}}">
          </div>
          <div class="col-sm-8">
               <h4>
                    {{$pelicula['title']}}
               </h4>
               <p>Año: {{$pelicula['year']}}</p>
               <p>Director: {{$pelicula['director']}}</p>
               <p>Resumen: {{$pelicula['synopsis']}}</p>
               <p>Estado: Pelicula {{$pelicula['rented'] ? "actualmente alquilada" : "disponible" }} </p>

               @if ($pelicula['rented']) 
                    <a href="" class="btn btn-danger">Devolver pelicula</a>
               @else
                    <a href="" class="btn btn-success">Alquilar pelicula</a>
               @endif

               <a href="{{route('editar', $id)}}" class="btn btn-warning">Editar pelicula</a>
               <a href="{{route('catalog')}}" class="btn btn-light">Volver al listado</a>
          </div>
     </div>
@endsection