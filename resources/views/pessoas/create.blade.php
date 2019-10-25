@extends('template.app')

@section('content')


    <div class="col-md-12">
        <h3>Novo contato</h3>
    </div>

    <div class="col-md-6 well">
        <form class="col-md-12" action="{{url('/pessoas/store')}}" method="POST">
        {{csrf_field()}}
            <div class="form-group col-md-12 ">
                <label class="control-label ">Nome</label>
                <input type="text" name="nome"
                 class=" col-md-12 form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}"
                 value="{{old('nome')}}" placeholder="Nome">
                @if($errors->has('nome'))
                    {{$errors->first('nome')}}
                @endif
            </div>         
            <div class="form-group col-md-4">
                <label class="control-label">DDD</label>
                <input type="text" name="ddd"
                 class=" col-md-12 form-control {{ $errors->has('ddd') ? 'is-invalid' : ''}}"
                 value="{{old('ddd')}}" placeholder="DDD">
                 @if($errors->has('nome'))
                    {{$errors->first('nome')}}
                @endif
            </div>         
            <div class="form-group col-md-8">
                <label class="control-label">Telefone</label>
                <input type="text" name="telefone"
                 class=" col-md-12 form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}"
                 value="{{old('telefone')}}" placeholder="Telefone">
                 @if($errors->has('nome'))
                    {{$errors->first('nome')}}
                @endif
            </div>         
            <button style="margin-bottom: 10px; float: right" class="btn btn-primary">Salvar</button>
           
        </form>
    </div>

@endsection