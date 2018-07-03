@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center" style="background-image: url('http://localhost/BDCandy/public/image/fondo2.jpg'); background-repeat: repeat-x; background-position: center; background-size: 40%;">
        <h1 > Registro de puntos</h1>
 
    </div>
        
            {!! Form::open(array('route' => 'agregarp')) !!}              
               
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="pun_valor">Valor del punto</label>
                            <input type="text" class="form-control" id="pun_valor" name="pun_valor" placeholder="Nuevo Valor">
                        </div>
                    

                    </div>             
                               
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="pun_fechainicio"> Fecha Inicio </label>
                            <input type="date" class="form-control" id="pun_fecha_inicio" name="pun_fecha_inicio" placeholder="fecha de inicio">
                        </div>
                        <div class="col-md-4">
                            <label for="cli_nat_segundo_nombre"> Fecha Fin</label>
                            <input type="date" class="form-control" id="pun_fecha_fin" name="pun_fecha_fin" placeholder="fecha de fin">
                        </div>   
                        

                    </div>             
                       

                <div class="form-inline my-auto my-lg-auto" style="margin-left: 45%">
                     <button type="submit" class="btn btn-primary"> Registrar</button>
                </div>
                <a href="{{ url('/puntos') }}" class="btn btn-link">Regresar al listado de puntos</a>
               
            {{form::close()}}
           
   
@endsection