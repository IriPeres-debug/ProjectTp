@extends('site.master.layout')

@section('title', 'list')

@section('content')
<table class="table table-hover container">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cadastros as $cadastro)
    <tr>
      <td>{{$cadastro['id']}}</td>
      <td>{{$cadastro['name']}}</td>
      <td>{{$cadastro['surname']}}</td>
      <td>{{$cadastro['email']}}</td>
      <td>{{$cadastro['telefone']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection