@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center" style="background-image: url('http://localhost/BDCandy/public/image/fondo2.jpg'); background-repeat: repeat-x; background-position: center; background-size: 40%;">
        <h2 class="display-2"> <b>Nuestros Clientes</b>   </h2>
        <div class="row">
            @foreach ($clientes as $cliente)
            <div class="col-6">
                <img class="img-thumbnail" src="
                   {{ asset( $cliente['imagen'] ) }}  ">
                <p class="card-text"> <b>
                    {{ $cliente['contenido'] }}
                <a href='{{asset($cliente["direccion"])}}'>Ingresar</a>   
                 </b>
                </p>
            </div>
            @endforeach
        </div>
    </div>
@endsection