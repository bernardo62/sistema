@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{Session::get('mensaje')}}
    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="True"> &times; </span>
    </button>

</div>
@endif





<a href="{{url('categoria/create')}}" class="btn btn-success" >Registrar nueva categoria</a>
<br>
<br>

<table class="table table-striped">
<thead style="background: lightgray;">    
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Responsable</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->Nombre}}</td>
            <td>{{$categoria->Responsable}}</td>
            <td>
            <a href="{{url('/categoria/'.$categoria->id.'/edit')}}" class="btn btn-dark">
                Editar 
            </a>    
            | 

                <form action="{{url('/categoria/'.$categoria->id)}}" class="d-inline"  method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que desea borrar?')" value="Borrar">

                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
{!! $categorias->links()!!}
</div>
@endsection