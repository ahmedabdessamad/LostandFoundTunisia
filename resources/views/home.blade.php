@extends('layouts.apphome')

@section('content')
    <div class="grid-item classic">
        <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/17.jpg" alt="Product"></a>
            <h3 class="product-title"><a href="shop-single.html">Gents BN0024 Classic</a></h3>
            <h4 class="product-price">€185.00</h4>
            <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
            </div>
        </div>
    </div>
@endsection
