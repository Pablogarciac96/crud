@extends('layout.plantilla')
@section ('title','home')

@section('content')
<form method="post">
  @csrf
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Telefono</label>
        <div class="col-sm-10">
          <input type="text"  class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Direccion</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
      </div>

    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Repetir contraseña</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword">
        </div>
      </div>
      <button type="button" class="btn btn-success">Success</button>
  </form>
@endsection()
