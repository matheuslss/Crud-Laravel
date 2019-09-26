@extends('shared.base')

@section('content')
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach 
            </div>
        @endif 

    <div class="panel panel-default">
    
        <div class="panel-heading"><h3>Edite o imóvel</h3></div>
        <div class="panel-body">
        
            <form action="{{ route('imoveis.update', $imovel->id) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
                
                <h4>Dados do imóvel</h4>
                <hr>
                <div class="form-group">
                    <label for="descricao"> Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" required value="{{$imovel->descricao}}"> 
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" placeholder="Preço" name="preco" required value="{{$imovel->preco}}"> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qtdQuartos">Quantidade de Quartos</label>
                            <input type="number" class="form-control" placeholder="Quantidade de Quartos" name="qtdQuartos" required value="{{$imovel->qtdQuartos}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                         <label for="tipo">Tipo do Imóvel</label>
                         <select class="form-control" name="tipo" required value="{{$imovel->tipo}}">
                            <option {{($imovel->tipo == 'apartamento' ? 'selected' : '')}}>Apartamento</option>
                            <option {{($imovel->tipo == 'casa' ? 'selected' : '')}}>Casa</option>
                            <option {{($imovel->tipo == 'kitnet' ? 'selected' : '')}}>Kitnet</option>
                         </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                         <label for="finalidade">Finalidade do imóvel</label>
                         <select class="form-control" name="finalidade" required value="{{$imovel->finalidade}}">
                            <option {{($imovel->finalidade == 'venda' ? 'selected' : '')}}>Venda</option>
                            <option {{($imovel->finalidade == 'locação' ? 'selected' : '')}}>Locação</option>
                         </select>
                        </div>
                    </div>
                </div>
                <h4>Endereço</h4>
                <hr>

                <div class="form-group">
                    <label for="logradouroEndereco">Logradouro</label>
                    <input type="text" class="form-control" placeholder="Logradouro" name="logradouroEndereco" required value="{{$imovel->logradouroEndereco}}">
                </div>

                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="bairroEndereco">Bairro</label>
                            <input type="text" class="form-control" placeholder="Bairro" name="bairroEndereco" required value="{{$imovel->bairroEndereco}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="numero">Número</label>
                        <input type="number" class="form-control" placeholder="Número" name="numeroEndereco" required value="{{$imovel->numeroEndereco}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cidadeEndereco">Cidade</label>
                            <input type="text" class="form-control" placeholder="Cidade" name="cidadeEndereco" required value="{{$imovel->cidadeEndereco}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" placeholder="CEP" name="cepEndereco" required value="{{$imovel->cepEndereco}}">
                    </div>
                </div> 

                <!-- <a href="{{ url()->previous()}}" class="btn btn-default">Voltar</a>  -->
                <a href="{{ route('imoveis.index') }}" class="btn btn-default">Voltar</a> 
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>

        </div>

    </div>

    @endsection