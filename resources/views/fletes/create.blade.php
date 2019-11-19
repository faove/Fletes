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
                            <label for="exampleInputNombre">Nombre y Apellido</label>
                            <input type="nombre" name="nombre" class="form-control" id="exampleInputNombre" aria-describedby="nombreHelp" placeholder="Suministre su Nombre y Apellido">
                          </div>
                          </div>

                          <button type="submit" class="btn btn-primary">Registrarse</button>
                        </form>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'dd-mm-yyyy'

     });  

</script>
@endsection