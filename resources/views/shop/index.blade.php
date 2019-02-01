@extends('layouts.master')

@section('title', 'Laravel Shopping Cart')

@section('content')
    @foreach($products->chunk(3) as $productChunk)
        <div class="card-deck mb-5">
            @foreach($productChunk as $product)
                <div class="card">
                    <img src="{{ $product->imagePath }}" class="card-img-top img-responsive" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text description">{{ $product->description }}</p>
                        <p class="price">${{ $product->price }}</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-success" role="button">カートに入れる</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    
@endsection