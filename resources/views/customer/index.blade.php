@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Customers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/customers/create">Agregar Usuario</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table">
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->customer_name}}</td>
                    </tr>
                @endforeach
            </div>
        </div>
    </div>




@endsection
