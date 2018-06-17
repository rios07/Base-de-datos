@extends('layouts.app')
<<<<<<< HEAD

@section('title', 'Usuarios')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">{{ $title }}</h1>
        <p>
            <a href="#" class="btn btn-primary">Nuevo Producto</a>
        </p>
=======
@section('title', 'Productos')
@section('content')

    <div class="jumbotron text-center">
        <h1 class=""> {{$title}} </h1>
        <nav class="navbar navbar-light bg-light justify-content-between">

            <ul class="nav nav-pills">
                <li class="nav-item">  <a class="nav-link" href=" {{ url('/') }} "> <b>CandyUcab</b>   </a>     </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('productos.create') }}">Nuevo Producto</a></li>  
                <li class="nav-item btn-nav-input" style="margin-left: 13%; margin-right: 5%;">
                    <form align="right" class="form-inline  my-100 my-lg-0">
                        <input  class="form-control " type="search" placeholder="Buscar" aria-label="search">
                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form>
                </li> 
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></li>                    
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->usu_nombre }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
>>>>>>> francisco
    </div>

    @if ($productos->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
        <tr>
<<<<<<< HEAD
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
=======
            <th scope="col">Nombre</th>
            <th scopre="col"></th>
>>>>>>> francisco
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
        <tr>
<<<<<<< HEAD
            <th scope="row">{{ $producto->pro_codigo }}</th>
            <td>{{ $producto->pro_nombre }}</td>
            <td>
                <form action="#" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="#" class="btn btn-link"><span class="oi oi-eye"></span></a>
                    <a href="#" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
=======
            <td scope="row">{{ $producto->pro_nombre }}</td>
            <td>
                <form action="{{ route('productos.destroy', $producto) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href=" {{ route('productos.show', ['codigo' => $producto->pro_codigo]) }} " class="btn btn-outline-primary">Detalles</a>
                    <a href=" {{ route('productos.edit', ['codigo' => $producto->pro_codigo]) }} " class="btn btn-outline-primary">Modificar</a>                   
                    <button type="submit" class="btn btn-outline-primary">Eliminar</button>
>>>>>>> francisco
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay productos registrados.</p>
    @endif
@endsection