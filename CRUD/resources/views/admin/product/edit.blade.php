@extends('admin.master')
@section('title', 'Edit-Product')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <form action="{{route('product.update',$product->id)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control" id="name" >
                        <span class="text-danger">{{$errors->has('name')? $errors->first('name') : ''}}</span>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control" id="quantity" >
                        <span class="text-danger">{{$errors->has('quantity')? $errors->first('quantity') : ''}}</span>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" value="{{$product->price}}" class="form-control" id="price" >
                        <span class="text-danger">{{$errors->has('price')? $errors->first('price') : ''}}</span>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
