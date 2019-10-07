@extends('layouts.main')
@section('conteudo')

<nav class="navbar navbar-dark bg-primary">
    <h1 class="title" color>EDITAR ALUNO</h1>  
</nav>
<div class="container">

        <form method="post" action="{{route('aluno.update', $aluno->id)}}">
                        {!! method_field('put') !!}
                        {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome do aluno</label>
                    <input name="nome" type="text" value="{{$aluno->nome}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o nome do aluno...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Disciplina</label>
                    <input name="disciplina" type="text" value="{{$aluno->disciplina}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite a disciplina do aluno...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Data da matrícula</label>
                    <input name="data_matricula" type="date" value="{{$aluno->data_matricula}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o nome do aluno...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nota</label>
                    <input name="nota" type="text" value="{{$aluno->nota}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite a nota do aluno...">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('aluno.index') }}">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </a>
            </form>

</div>

@endsection