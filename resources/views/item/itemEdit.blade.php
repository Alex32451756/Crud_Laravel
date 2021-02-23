@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h4>Perro</h4>
                <p class="text-successfully">{{Session::get('message')}}</p>
                <div class="card-body">
                <form method="post" action="{{route('updateItem')}}">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="exampleInputEmail1">Raza</label>
                    <input type="text" name="name" class="form-control" value="{{$singleItem->name}}" placeholder="Enter Name">
                    <input type="hidden" name="id" class="form-control" value="{{$singleItem->id}}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <input type="text" name="type" class="form-control" value="{{$singleItem->type}}" placeholder="Type">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="text" name="qty" class="form-control" value="{{$singleItem->qty}}" placeholder="Type">
                </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark">Listo</button>
      </div>
      <style>
       body{
           background-color: black;
       }
      
       </style>
      </form>
    </div>
  </div>
</div>
@endsection