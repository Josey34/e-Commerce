@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Product') }}</div>

                <div class="card-body">
                    <form action="{{ route('update_product', $product) }}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{ $product->description }}" class="form-control" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" value="{{ $product->price }}" placeholder="Price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" name="stock" value="{{ $product->stock }}" placeholder="Stock" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
