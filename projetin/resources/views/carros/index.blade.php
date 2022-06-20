@extends('templates.template')
@section('content')
<h1 class="text-center">Carros</h1> <hr>

<div class="text-center mt-3 mb-4">
    <a href="{{url('carros/create')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-8 m-auto">
    @csrf
    <table class="table text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>

        @foreach($carros as $carro)
            <tr>
                <th scope="row">{{$carro->id}}</th>
                <td>{{$carro->nome}}</td>
                <td>{{$carro->preco}} R$</td>
                <td>         
                    <a href="{{url("carros/$carro->id/edit")}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>

                    <a href="{{url("carros/$carro->id")}}">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection