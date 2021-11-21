@extends('site.master.layout')

@section('title', 'dashboard')

@section('content')
<main class="container">
  <div class="my-3 p-3 rounded shadow-sm bg-purple">
    <div class="d-flex pt-3">
      <a class="navbar-brand" href="#">📑</a>
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <div class="lh-1 text-white">
            <h1 class="h6 mb-0  lh-1">Registro de Contatos</h1>
            <small>{{ date('D/M/Y') }}</small>
          </div>
          <a class="btn btn-secondary  btn-sm" href="list" role="button">Ver Contatos Registrados</a>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection