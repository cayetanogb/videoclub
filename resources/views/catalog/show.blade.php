@extends('layouts.master')

@section('content')
     <div class="row">
          <div class="col-sm-4">
               <img src="{{$id['poster']}}">
          </div>
          <div class="col-sm-8">
               <h4>
                    {{$id['title']}}
               </h4>
               <p>Año: {{$id['year']}}</p>
               <p>Director: {{$id['director']}}</p>
               <p>Resumen: {{$id['synopsis']}}</p>
               <p>Estado: Pelicula {{$id['rented'] ? "actualmente alquilada" : "disponible" }} </p>

               @if ($id['rented']) 
                    <a href="" class="btn btn-danger">Devolver pelicula</a>
               @else
                    <a href="" class="btn btn-success">Alquilar pelicula</a>
               @endif

               <a href="" class="btn btn-warning">Editar pelicula</a>
               <a href="" class="btn btn-light">Volver al listado</a>
          </div>
     </div>
@endsection