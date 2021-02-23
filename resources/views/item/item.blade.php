@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="">
            <div class="">
                <div class="card-header">
                
                <h1>Dogs</h1>
                </div>
                <p class="text-successfully">{{Session::get('message')}}</p>
               
                <div class="card-body">
                <table class="table">
                <thead class="thead-dark">
                <th scope="col">Numero</th>
                        <th scope="col">Raza</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">precio</th>
                        <th scope="col">Action</th>
                        </tr>
                </thead>
                <tbody>
                      @php($i=1)
                      @foreach($allItem as $item)
                        <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->qty}}</td>
                        <td>

                
                        <a  href="{{route('editItem',['id'=>$item->id])}}">   <button type="button"  class="btn btn-outline-success">Editar</button></a>
                
                        <a  href="{{route('deleteItem',['id'=>$item->id])}}" ><button type="button" class="btn btn-outline-danger">Eliminar</button></a>
                       
                        </td>
                        </tr>
                  @endforeach
                </tbody>
                </table><br>

                
       <style>
       body{
           background-color: whitesmoke;
       }
       #forma{
        background-color: gray;
       }
       </style>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <div>
                <marquee behavior="60" direction="" srollamount="60">
                <img src="{{ asset('images/perro.gif') }}"/>
                <img src="{{ asset('images/tenor.gif') }}"/>
                
                </marquee>
     </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresa nuevo perro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{route('saveItem')}}" class="forma">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Raza</label>
                <input type="text" name ="name"class="form-control" placeholder="Raza">
                 </div>
                 <div class="form-group">
                <label for="exampleInputEmail1">Descripción</label>
                <input type="text" name="type" class="form-control" placeholder="Descripción">
                 </div>
                 <div class="form-group">
                <label for="exampleInputEmail1">Precio</label>
                <input type="text"  name="qty"class="form-control" placeholder="Precio">
                 </div>
            
                 <div class="modal-footer">
        <button type="submit" class="btn btn-outline-dark">Listo</button>
      
   </form>
      </div>
        
      </div>
      
    </div>
  </div>
</div>
</div>
@endsection