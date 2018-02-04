@extends('template_n.main')
@section('title')
Crear Usuario
@endsection

@section('content')

<h3 class="titulo">Editar Usuarios </h3>

<div class="tabla">


{!! Form::open(['route' => ['users.update',$user], 'method' => 'PUT']) !!}
<!--{!! Form::open(['method' => 'PATCH', 'action' => ['UsuariosController@update', $user->id], 'files' => true]) !!} -->


  <div class="form-group">

     {!! Form::label('name','Nombre')!!}
     {!! Form::text('name', $user->name,['class' => 'form-control', 'placeholder' => 'Nombre Completo','required'])!!}

  </div> 

  <div class="form-group">

     {!! Form::label('email','Correo Electronico')!!}
     {!! Form::text('email',$user->email,['class' => 'form-control', 'placeholder' => 'example@gmail.com','required'])!!}

  </div> 


  <div class="form-group">

  		{!! Form::label('type','Tipo') !!}
      {!! Form::select('type', ['alumno' => 'alumno', 'profesor' => 'profesor', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción..', 'required']) !!}
  	

  </div>

  <div align="right">
  	
  	{!! Form::submit('Editar', ['class' => 'btn btn-success'] )!!}

  </div>

</div>
 <!-- <div>
  <a href="" class="btn btn-success">boton bootstrap</a>
  </div> -->
{!! Form::close() !!}


Listado de asignaturas:
  <table class="table">
  <th>Asignatura</th>
  <th>Curso</th>
  @foreach($asignaturas as $asignatura)
      <tr>
        <td>{{ $asignatura->nombre_asig }}</td>
        <td>{{ $asignatura->curso }}</td>         
      </tr>  
  @endforeach
  </table>

<a  class="btn btn-success" href="listAsignaturas">Agregar asignaturas</a>

@endsection
 