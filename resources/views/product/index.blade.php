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
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>

   
    
</div>


@endsection