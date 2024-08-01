<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('product_images/') . '/' . $product->image }}" class="img-fluid" alt="Product Image">
            </div>
            <div class="col-md-6">
                <h1 class="display-4">{{$product->name}}</h1>
                <p class="lead">{{$product->description}}</p>
                <h3 class="my-4"><i class="bi bi-currency-dollar"></i> {{$product->price}}</h3>
                <a href="{{route('Stripe.Checkout', ['price' => $product->price, 'product' => $product->name])}}" class="btn btn-primary">Buy Now</a>
            </div>
        </div>
    </div>


</body>

</html>
