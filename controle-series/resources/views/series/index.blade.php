@extends('layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')
    @if( ! empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="/series/adicionar" class="btn btn-dark mb-5">Adicionar</a>

    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">
                {{ $serie->nome }}
            </li>
        @endforeach
    </ul>
@endsection
