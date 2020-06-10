@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Nuevo Cliente</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/customers">Regresar</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/customers" method="POST">
                <div class="form-group">
                    <label for="customername">Nombre cliente: </label>
                    <input type="text" class="form-control" id="cname" name="cname" placeholder="Ingrese nombre ">
                </div>
                <button  class="btn btn-primary" type="submit" >enviar</button>
            </form>
        </div>
    </div>




@endsection
