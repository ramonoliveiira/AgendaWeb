@extends("template.app")

@section("content")
<style>
    .btn-action {
        padding: 5px;
        margin: 2px;
        float: right;
        text-align: top;
    }
    
</style>

<div class="row">
    <div class="col-md-6">
    <h3>Deseja realmente excluir esse contato?</h3>
    <a href="{{url('/pessoas/' . $pessoa->id . '/destroy')}}" class="btn btn-danger btn-action">
        <i class="material-icons">delete</i>
     EXCLUIR</a>
    <a href="{{url('/pessoas/Todos')}}" class="btn btn-info btn-action">
        <i class="material-icons">cancel</i>
     Cancelar</a>
    </div>


    <div class="col-sm-12 col-md-3 my-3">
        <div class="card border-danger">
            <div class="card-header text-center bg-transparent border-danger">
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
</div>
    @endsection