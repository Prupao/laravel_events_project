@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
           <label for="title">Eventos:</label> 
           <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
           <label for="title">Cidade:</label> 
           <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
           <label for="title">O evento é privado?</label> 
           <select name="private" id="private" class="form-control">
            <option selected>Selecione</option> <!--Eu que criei essa parte-->
            <option value="0">Não</option>
            <option value="1">Sim</option>
           </select>
        </div>
        <div class="form-group">
           <label for="title">Descrição:</label> 
           <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <input type="submit" value="Criar Evento" class="btn btn-primary">
    </form>
</div>
@endsection