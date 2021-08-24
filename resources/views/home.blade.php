@extends('layout.plantilla')
@section ('title','home')

@section('content')
<div class="container" style="margin-top: 15px">
  <div class="container-fluid" style="border: solid 1px">
    <br>
<form action="{{route('envioform')}}" method="POST">
  @csrf
    <div class="form-group row" style="margin-right:50px">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10" >
          <input type="text" class="form-control" name="nombre" value="{{old ('nombre')}}"  required>
        </div>
        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
      </div>
      <br>
      <div class="form-group row" style="margin-right:50px">
        <label for="staticEmail" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10" >
          <input type="text" class="form-control" name="apellido" value="{{old ('apellido')}}" >
        </div>
        @error('apellido')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
      </div>
      <br>

      <div class="form-group row" style="margin-right:50px">
        <label for="staticEmail" class="col-sm-2 col-form-label">Telefono</label>
        <div class="col-sm-10" >
          <input type="text"  class="form-control" name="telefono" value="{{old ('telefono')}}">
        </div>
        @error('telefono')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
      </div>
      <br>

      <div class="form-group row" style="margin-right:50px">
        <label for="staticEmail" class="col-sm-2 col-form-label">Direccion</label>
        <div class="col-sm-10" >
          <input type="text" class="form-control" name="direccion" value="{{old ('direccion')}}" >
        </div>
        @error('direccion')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
      </div>
      <br>

    <div class="form-group row" style="margin-right:50px">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10" >
        <input type="text"  class="form-control" name="email" value="{{old ('email')}}">
      </div>
      @error('email')
      <br>
      <small>*{{$message}}</small>
      <br>
  @enderror
    </div>
    <br>

    <div class="form-group row" style="margin-right:50px">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="password">
      </div>
      @error('password')
      <br>
      <small>*{{$message}}</small>
      <br>
  @enderror
    </div>
<br>
<div class="form-group row" style="margin-right:50px">
  <label for="inputPassword" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
  <div class="col-sm-10">
    <input type="password" class="form-control" name="password2">
  </div>
  @error('password2')
  <br>
  <small>*{{$message}}</small>
  <br>
@enderror
</div>
      <button type="submit" class="btn btn-success" style="margin-left:50%;margin-bottom:15px;">Enviar</button>
  </form>
</div>
</div>
@endsection()
