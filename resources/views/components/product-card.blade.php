<div class="card">
    <img class="card-img-top" src="{{ asset($product->images->first()->path) }}" height="400">
    <div class="card-body">
        <h4 class="text-right"><strong>$ {{ $product->price }} </strong></h5>
        <h5 class="card-title"> {{ $product->title }} </h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text"><strong> {{ $product->stock }} left</strong></p>

        <form method="POST" action=" {{ route('products.carts.store', [ 'product' => $product->id ]) }} " class="d-inline">
        
            @csrf
            <button type="submit" class="btn btn-success">Add To Cart</button>
        
        </form>
    </div>
</div>

