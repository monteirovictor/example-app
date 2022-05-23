@extends('layout.app')

@section('title','listagem')


@section('content')
<div class="col-md-10"></div>
<div class="col-md-2">
    <a name="" id="" class="btn btn-primary" href="{{route('jogos-create')}}" role="button">Cadastrar</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Ano de Criação</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jogos as $jogo)
        <tr>
            <td>{{$jogo->id}}</td>
            <td>{{$jogo->nome}}</td>
            <td>{{$jogo->categoria}}</td>
            <td>{{$jogo->ano_criacao}}</td>
            <td>{{$jogo->valor}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection