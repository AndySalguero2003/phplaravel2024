@extends('layouts.app')

@section('content')
<h1>Crear nuevo docente</h1>
<form action="{{route('docentes.store')}}" method="POST">
    @csrf
      <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="col-md-4">
            <label for="apllido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">Correo Electronico</label>
                </label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="password" class="form-label">Contraseña</label>
                    </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="cold-md-12">
                    <button type="submit" class=" btn btn-primary">Crear</button>
                    <a href="{{ route('docentes.index') }}" class=" btn btn-secondary">Cancelar</a>
                </div>
         </div>
</form>
  
@endsection