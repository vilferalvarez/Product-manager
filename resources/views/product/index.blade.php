@extends('layouts.app')
@section('content')

<div class="container">
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        
    @endif
    <div class="row">
        <div class="col-sm-3 col-sm-offset-9">
        <a type="button" class="btn btn-outline-success" href="{{route('product.create')}}">New product</a>
        </div>
    </div>
    <div class="row">
            <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Category</th>
                            <th scope='col'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $p)
                            <tr>
                                <th>{{$p->id}}</th>
                                <td>{{$p->name}}</td>
                                <td>{{$p->description}}</td>
                                <td>{{$p->category->name}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li>
                                            <a class="dropdown-item" href="{{route('product.edit',$p->id)}}">Edit <i class="fa-solid fa-pen-to-square"></i></a>
                                        </li>
                                        <li>
                                            <form action="{{route('product.destroy',$p->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item" value="Delete" style="display:inline;">Delete<i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                           
                                        </li>
                                        </ul>
                                      </div>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>

   
    
</div>


@endsection