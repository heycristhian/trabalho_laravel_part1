@extends('layouts.main')
@section('conteudo')
<nav class="navbar navbar-dark bg-primary">
  <h1 class="title">LISTA DE ALUNOS</h1>  
</nav>
<nav class="nav-button">
<a href="{{ route('aluno.create') }}">
    <button type="submit" class="btn btn-primary">ADICIONAR ALUNO</button>
</a>
</nav>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Data Matrícula</th>
      <th scope="col">Nota</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach ($alunos as $al)
      <tr>
        <td>{{ $al->id }}</td>
        <td>{{ $al->nome }}</td>
        <td>{{ $al->disciplina }}</td>
        <td>{{ $al->data_matricula }}</td>
        <td>{{ $al->nota }}</td>
      <td><a href=" {{ route('aluno.edit', $al->id) }}"><button type="button" class="btn btn-outline-warning">Editar</button></a></td>
        <td><a href=""><button type="button" class="btn btn-outline-danger">Remover</button></a></td>
      </tr>
      @endforeach

  
  </tbody>
</table>

@endsection