@extends('layouts.main')
@section('conteudo')

<nav class="navbar navbar-dark bg-primary">
    <h1 class="title" color>INSERIR ALUNO</h1>  
</nav>

<div class="container">    
    <form action="{{ route('aluno.store') }}" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome do aluno</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o nome do aluno...">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Disciplina</label>
                <input type="text" name="disciplina" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite a disciplina do aluno...">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Data da matrícula</label>
                <input type="date" name="data_matricula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite a matrícula do aluno...">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nota</label>
                <input type="number" name="nota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite a nota do aluno...">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('aluno.index') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>
    
</div>
@endsection