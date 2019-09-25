@extends('shared.base')

@section('content')

    <div class="panel panel-default">
    
        <div class="panel-heading"><h3>Cadastre o imóvel</h3></div>
        <div class="panel-body">
        
            <form action="" method="post">
                {{csrf_field()}}
                <h4>Dados do imóvel</h4>
                <hr>
                <div class="form-group">
                    <label for="descricao"> Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" required> 
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" placeholder="Preço" name="preco" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qtdQuartos">Quantidade de Quartos</label>
                            <input type="number" class="form-control" placeholder="Quantidade de Quartos" name="qtdQuartos" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                         <label for="tipo">Tipo do Imóvel</label>
                         <select class="form-control" name="tipo" required>
                            <option value="">Apartamento</option>
                            <option value="">Casa</option>
                            <option value="">Kitnet</option>
                         </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                         <label for="finalidade">Finalidade do imóvel</label>
                         <select class="form-control" name="finalidade" required>
                            <option value="">Venda</option>
                            <option value="">Locação</option>
                         </select>
                        </div>
                    </div>
                </div>
                <h4>Endereço</h4>
                <hr>

                <div class="form-group">
                    <label for="logradouroEndereco">Logradouro</label>
                    <input type="text" class="form-control" placeholder="Logradouro" name="logradouroEndereco" required>
                </div>

                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="bairroEndereco">Bairro</label>
                            <input type="text" class="form-control" placeholder="Bairro" name="bairroEndereco" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="numero">Número</label>
                        <input type="number" class="form-control" placeholder="Número" name="numeroEndereco" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cidadeEndereco">Cidade</label>
                            <input type="text" class="form-control" placeholder="Cidade" name="cidadeEndereco" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" placeholder="CEP" name="cepEndereco" required>
                    </div>
                </div> 

                <a href="{{ url()->previous()}}" class="btn btn-default">Voltar</a> 
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>

        </div>

    </div>

    @endsection