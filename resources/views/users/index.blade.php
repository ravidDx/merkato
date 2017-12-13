<!-- Relativo a la carpeta view -->
@extends('layout')

@section('content')

    <h1>Perfil del usuario</h1>

    <ul>
        @forelse($users as $user)
          <li>{{$user}}</li>
        @empty
          <li>No hay usuarios registrados.</li>    
        @endforelse
    
    </ul>

@endsection

@section('sidebar')
  <h2>BARRA LATERAL PERSONALIZADA</h2>
@endsection