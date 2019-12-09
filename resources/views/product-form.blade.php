@extends('layout')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-5">
            <img class="img-fluid mb-3" src="https://images.unsplash.com/photo-1510018572596-e40e2619b412?fit=crop&w=500&h=350&q=80" />
        </div>
        <form class="col-md-7" method="POST">
            <h1>Create Product</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" rows="3" id="desc" name="desc"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="msrp">MSRP</label>
                <input type="text" class="form-control" id="msrp" name="msrp">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection