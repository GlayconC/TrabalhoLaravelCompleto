@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($carros)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($carros))
            <form name="formEdit" id="formEdit" method="post" action="{{url("carros/$carros->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('carros')}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="id" id="id" placeholder="Código:" value="{{$carros->id ?? ''}}" required><br>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$carros->nome ?? ''}}" required><br>
                <input class="form-control" type="number" name="preco" id="preco" placeholder="Preço:" value="{{$carros->preco ?? ''}}" required><br>
                <input class="btn btn-primary" type="submit" value="@if(isset($carros)) Editar @else Cadastrar @endif">
            </form>
    </div>
@endsection