@extends('site.master.layout')
<div class="container">
  <div class="py-5 text-center">
    <h2>Formulário de contato</h2>
    <p class="lead">Abaixo temos um formulário que você deverá preencher para que possamos receber seu pedido de locação.</p>
  </div>

  <form action="{{ url('/contact/new') }}" method="post" class="needs-validation" novalidate>
    @csrf
    {{ csrf_field() }}


    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="primeiroNome">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="" value="" required>
        <div class="invalid-feedback">
          É obrigatório inserir um nome válido.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" class="form-control" name="surname" placeholder="" value="" required>
        <div class="invalid-feedback">
          É obrigatório inserir um sobre nome válido.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="primeiroNome">Telefone</label>
        <input type="text" class="form-control" name="telefone" placeholder="" value="" required>
        <div class="invalid-feedback">
          É obrigatório inserir um telefone válido.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="email">Email</span></label>
        <input type="email" class="form-control" name="email" placeholder="fulano@exemplo.com">
        <div class="invalid-feedback">
          Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
        </div>
      </div>
    </div>
    <center>
      <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
    </center>
  </form>

  @section('content')


  @endsection