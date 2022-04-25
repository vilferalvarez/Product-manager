@extends('layouts.app')

@section('content')
@if (Session::has('message'))
    <p>{{Session::get('message')}}</p>
@endif
<form action="{{route('product.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="container">
        @include('product.include._product_form',['mode'=>'Create'])
    </div>
 
</form>
    
@endsection