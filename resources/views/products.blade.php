@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Essa é a pagina de produtos</h1>
@if($busca != '')
    <p>O usuario esta buscando por: {{ $busca }}</p>
@endif
<a href="/">voltar para home</a>

@endsection