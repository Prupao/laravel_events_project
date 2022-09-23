@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Lista de produtos</h1>

<hr>
<form method="get">
    @csrf

    <b>Produto</b>
    <input type="text" name="produto"><br><br>

    <b>Preço</b>
    <input type="text" name="preco"><br><br>

    <b>Categoria</b>
    <input type="text" name="categoria"><br><br>

    <input type="submit" value="salvar">

</form>
<hr>

@endsection
