@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="" method="">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    <br>
    Descripcion:<br>
    <input type="textarea" name="descripcion">
    <br>
    Contraseña:<br>
    <input type="pasword" name="contraseña">
    <br>
    e-mail:<br>
    <input type="email" name="email">
    <br>
    Likes:<br>
    <input type="number" name="likes">
    <br>    <br>

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
