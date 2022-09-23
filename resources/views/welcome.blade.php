@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1> algum titulo </h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 15)
    <p> A condição é true </p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Pedro")
<p>O nome é Pedro</p>
@elseif($nome == 'Matheus')
<p>O nome é {{ $nome }}</p>
<p>A idade é {{ $idade }}</p>
@else
<p>O nome não é Pedro</p>
@endif

@for($i = 0; $i < count($array); $i ++)
    <p>{{$array[$i]}}</p>
@endfor

@foreach($arrayNomes as $nome)
    <p>{{ $loop->index}}</p>
    <p>{{ $nome }}</p>
@endforeach

@php
    $name = 'Joao';
    echo $name;
@endphp

@endsection