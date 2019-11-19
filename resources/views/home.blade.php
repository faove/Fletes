@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fletes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ url('/fletes') }}" enctype="multipart/form-data">
                        @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Correo electronico</label>
                            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Suministre un correo">
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                          </div>
                          <div class="form-group">
                            <label for="exampleInputNombre">Nombre y Apellido</label>
                            <input type="nombre" name="nombre" class="form-control" id="exampleInputNombre" aria-describedby="nombreHelp" placeholder="Suministre su Nombre y Apellido">
                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                          </div>
                          <div class="form-group">      
                            <label for="exampleInputTelefono">Teléfono</label>
                            <input type="text" name="telefono" class="form-control" id="exampleInputTeléfono" placeholder="Teléfono...">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputTelefono">Celular</label>
                            <input type="text" name="celular" class="form-control" id="exampleInputTeléfono" placeholder="Celular...">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputDireccion">Dirección</label>
                            <input type="text" name="direccion" class="form-control" id="exampleInputDireccion" placeholder="Dirección..">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFecha">Fecha</label>
                            <input class="date form-control" name="fecha_registro" type="text">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlCom">Comentarios</label>
                            <textarea class="form-control" name="comentario" id="exampleFormControlCom" rows="3"></textarea>
                          </div>

                          <div class="form-group">
                            <input type="text" ng-model="archivo" class="form-control" value="Adjuntar Foto" />
                            <input type="file" name="fotoveh" value="archivo" size="80" />
                            </div>
                          </div>

                          <button type="submit" class="btn btn-primary">Registrarse</button>
                        </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $('.date').datepicker({  

       //format: 'dd-mm-yyyy'
       format: 'yyyy-mm-dd'
     });  

</script>
@endsection
