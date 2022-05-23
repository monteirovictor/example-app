@extends('layout.app')

@section('title','listagem')


@section('content')
<div class="container">
    <h1>Edit um jogo</h1><hr>

    <form action="{{route('jogos-update',['id' =>$jogos->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="" aria-describedby="" value="{{$jogos->nome}}">
        </div>
        <div class="form-group">
            <label for="">Categoria</label>
            <input type="text" name="categoria" id="categoria" class="form-control" placeholder="" aria-describedby="" value="{{$jogos->categoria}}">
        </div>
        <div class="form-group">
            <label for="">Ano de Criação</label>
            <input type="number" name="ano_criacao" id="ano_criacao" class="form-control" placeholder="" aria-describedby="" value="{{$jogos->ano_criacao}}">
        </div>
        <div class="form-group">
            <label for="">Valor</label>
            <input type="number" name="valor" id="valor" class="form-control" placeholder="" aria-describedby="" value="{{$jogos->valor}}">
        </div>

        <button type="submit" class="btn btn-primary" >Atualizar</button>
    </form>

</div>
@endsection