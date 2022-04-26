@extends('layouts.app')

@section('content')

<form action="{{route('product.update',$product->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="container">
        @include('product.include._product_form',['mode'=>'Edit'])
    </div>
 
</form>
    
@endsection