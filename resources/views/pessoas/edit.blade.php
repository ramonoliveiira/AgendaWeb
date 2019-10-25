@extends('template.app')

@section('content')

<div class="col-md-12">
    <h3>Editar contato</h3>
</div>
<div class="row">

    <div class="col-md-6 well">
        <form class="form-group col-md-12" action="{{url('/pessoas/update')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$pessoa->id}}" />
            <div class="form-group col-md-12">
                <label class="control-label">Nome</label>
                <input type="text" name="nome" value="{{$pessoa->nome}}" class=" col-md-12 form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}" placeholder="Nome">
                @if($errors->has('nome'))
                {{$errors->first('nome')}}
                @endif
                <button style="margin-top: 10px; float: right" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
    <div class="col-sm-12 col-md-3 my-3">
        <div class="card border-info">
            <div class="card-header text-center  bg-transparent border-info">
                <h3>{{$pessoa->nome}}</h3>
            </div>
            <div class="card text-center">
                <div class="card-body">

                    @foreach($pessoa->telefone as $telefone)
                    <p class="card-text">Telefone: ({{$telefone->ddd}}) {{$telefone->telefone}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </ @endsection