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
            <th>...</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jogos as $jogo)
        <tr>
            <th>{{$jogo->id}}</th>
            <th>{{$jogo->nome}}</th>
            <th>{{$jogo->categoria}}</th>
            <th>{{$jogo->ano_criacao}}</th>
            <th>{{$jogo->valor}}</th>
            <th class="d-flex"> 
                <a  class="btn btn-primary" href="{{route('jogos-edit',['id'=>$jogo->id])}}" role="button">editar</a>
                <form action="{{route('jogos-destroy',['id'=>$jogo->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </th>
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection