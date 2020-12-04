@extends('layouts.app')

@section('content')
    <div class="row card-center ">
        <div class="col-md-6">
            <h1 class="mb-5 titulo-login">LOGIN</h1>
            <form action="#" method="post">
                <div class="form-group">
                  <input type="text"
                    class="form-control form-control-lg rounded-pill border border-primary" placeholder="CPF">
                </div>
                <div class="form-group">
                <input type="text"
                    class="form-control form-control-lg rounded-pill border border-primary" placeholder="CPF">
                </div>
                <div class="row justify-content-between px-3 my-3">
                    <button type="button" class="btn btn-secondary rounded-pill btn-lg px-4 font-weight-bold">Acessar</button>
                    <button type="button" class="btn btn-outline-secondary rounded-pill btn-lg px-5 font-weight-bold">Cadastro</button>
                </div>
                <a href="#">Esqueci minha senha</a>
            </form>
        </div>
        <div class="col-md-6 d-md-block d-none pb-4">
            <h4 class="font-weight-bold ">
                SEJA BEM VINDO AO SISTEMA DE SOLICITAÇÃO DE ATENDIMENTO WEB DA DEFESA CIVIL.
            </h4>
            <h5 class="font-weight-bold  my-4">
                Faça de forma ágil e simples a solicitação de atendimento em apenas algumas etapas:
            </h5>
            <p class="ml-4">
                Etapa 1 - Cadastro do Requerente; <br>
                Etapa 2 - Criação de Novo Atendimento; <br>
                Etapa 3 - Seleção da modalidade de atendimento; <br>
                Etapa 4 - Envio da documentação digital solicitada.
            </p>
        </div>
    </div>
    <footer>
        <p>© 2020 Defesa Civil - Todos os direitos reservados</p>
    </footer>
@endsection
