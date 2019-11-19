@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{ url('/fletes/'.$flete->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATH')
      <div class="form-group">
        <label for="exampleInputEmail1">Correo electronico</label>
        <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Suministre un correo" value="{{ $flete->correo }}">
        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
      </div>
      <div class="form-group">
        <label for="exampleInputNombre">Nombre y Apellido</label>
        <input type="nombre" name="nombre" class="form-control" id="exampleInputNombre" aria-describedby="nombreHelp" placeholder="Suministre su Nombre y Apellido" value="{{ $flete->nombre }}">
        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
      </div>
      <div class="form-group">      
        <label for="exampleInputTelefono">Teléfono</label>
        <input type="text" name="telefono" class="form-control" id="exampleInputTeléfono" placeholder="Teléfono..." value="{{ $flete->telefono }}">
      </div>
      <div class="form-group">
        <label for="exampleInputTelefono">Celular</label>
        <input type="text" name="celular" class="form-control" id="exampleInputTeléfono" placeholder="Celular..." value="{{ $flete->celular }}">
      </div>
      <div class="form-group">
        <label for="exampleInputDireccion">Dirección</label>
        <input type="text" name="direccion" class="form-control" id="exampleInputDireccion" placeholder="Dirección.." value="{{ $flete->direccion }}">
      </div>
      <div class="form-group">
        <label for="exampleInputFecha">Fecha</label>
        <input class="date form-control" name="fecha_registro" type="text" value="{{ $flete->fecha_registro }}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlCom">Comentarios</label>
        <textarea class="form-control" name="comentario" id="exampleFormControlCom" rows="3" value="{{ $flete->comentario }}"></textarea>
      </div>

      <div class="form-group">
      	<br/>
      	{{ $flete->fotoveh }}
        <input type="text" ng-model="archivo" class="form-control" value="Adjuntar Foto" />
        <input type="file" name="fotoveh" value="{{ $flete->fotoveh }}" size="80" />
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>

      
 </form>
 </div>
 <script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script>

@endsection