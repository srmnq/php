@extends('layout')

@section('content')
<img class="img-fluid mb-5" src="https://images.unsplash.com/photo-1510018572596-e40e2619b412?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&h=650&q=80" />
<div class="container text-center">
    <h2 class="mb-3">Bestseller</h2>
    <div class="row mb-5 d-flex justify-content-between">
        @foreach($product as $product)
        <div class="col-md-3">
            <a href="products/{{$product->id}}" class="d-block border rounded mb-4 p-0 shadow-sm text-decoration-none">
                <img class="img-fluid mb-3" src="https://images.unsplash.com/photo-1510018572596-e40e2619b412?fit=crop&w=500&h=350&q=80" />
                <h4 class="text-muted mb-1">{{$product->name}}</h4>
                <div class="mb-3">
                    @if($product->msrp)
                    <s class="text-muted">{{$product->msrp}}€</s>
                    @endif
                    <span class="text-dark">{{$product->price}}€</span>
                </div>
            </a>
        </div>
        @endforeach

        <h2 class="mb-3">Alle Kategorien</h2>
        <div class="row mb-5 d-flex justify-content-between">
            <div class="col-md-4">
                <a href="category.html" class="d-block rounded bg-dark mb-4 py-5 shadow-sm text-decoration-none">
                    <h4 class="text-light m-4">Categroy 1</h4>
                </a>
            </div>
            <div class="col-md-4">
                <a href="category.html" class="d-block rounded bg-dark mb-4 py-5 shadow-sm text-decoration-none">
                    <h4 class="text-light m-4">Categroy 1</h4>
                </a>
            </div>
            <div class="col-md-4">
                <a href="category.html" class="d-block rounded bg-dark mb-4 py-5 shadow-sm text-decoration-none">
                    <h4 class="text-light m-4">Categroy 1</h4>
                </a>
            </div>
        </div>
    </div>
    @endsection