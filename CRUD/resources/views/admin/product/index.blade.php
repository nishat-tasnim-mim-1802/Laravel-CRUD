@extends('admin.master')
@section('title', 'Manage-Product')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <p>{{Session::get('message')}}</p>
                <table class="table">
                    <thead>
                        
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                      
                        
                    </thead>
                    <tbody>
                        @foreach ($products as $product )
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{route('product.delete',$product->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
