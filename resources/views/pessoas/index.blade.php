@extends("template.app")

@section("content")
<style>
    .btn-action {
        padding: 2px;
        margin: 2px;
        float: right;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <div class="btn-group">
            <a href="{{url('/pessoas/Todos')}}" class="btn btn-primary {{$criterio === 'Todos' ? 'disabled' : ''}} ">
                #
            </a>
        </div>
        @foreach(range('A', 'Z') as $letra)
        <div class="btn-group">
            <a href="{{url('/pessoas/' . $letra)}}" class="btn btn-primary {{$letra === $criterio ? 'disabled' : ''}} ">
                {{$letra}}

            </a>
        </div>
        @endforeach
    </div>
    <h1 class="my-5">Critério: {{$criterio}}</h1>
    <div class="col-sm-8 my-3 ml-5">
        
        <form class="form" action="{{url('pessoas/busca')}}" method="POST" style="margin-left:800 px">
            <div class="input-group mr-sm-4 ">
                {{csrf_field()}}
                <input type="text" class="form-control mr-sm-2" name="criterio" placeholder="Buscar...">
                <span class="input-group-btn">                
                <button class="btn btn-outline-success my-sm-0" type="submit">Ok</button>
                </span>
            </div>
        </form>
    </div>

    @foreach ($pessoas as $pessoa)


    <div class="col-sm-12 col-md-4 my-3">
        <div class="card border-info">
            <div class="card-header text-center bg-transparent border-info">
                <h3>{{$pessoa->id}}</h3>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title">Nome: {{$pessoa->nome}}</h4>
                    @foreach($pessoa->telefone as $telefone)
                    <p class="card-text">Telefone: ({{$telefone->ddd}}) {{$telefone->telefone}}</p>
                    @endforeach
                    <a href="{{url('/pessoas/' . $pessoa->id . '/editar')}}" class="btn btn-xs btn-primary btn-action">
                        <i class="material-icons">build</i></a>
                    <a href="{{url('/pessoas/' . $pessoa->id . '/excluir')}}" class="btn btn-xs btn-danger btn-action">
                        <i class="material-icons">delete</i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>



<!--  @foreach ($pessoas as $pessoa)

    <div class="card col-md-3">
        <div class="card-header">
            {{$pessoa->id}}
        </div>
        <div class="card-body">

        </div>
        @foreach($pessoa->telefone as $telefone)
        <p class="card-title"><strong>Telefone:</strong>{{$telefone->telefone}}</p>
    </div>
        @endforeach

    @endforeach -->
@endsection