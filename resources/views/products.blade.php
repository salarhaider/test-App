<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Products</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-10">
                @if($message = Session::get('success'))
                    <div class="alert alert-success">{{$message}}</div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-10">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <a class="btn btn-primary text-center" href="{{route('create_product')}}"><i
                                class="bi bi-plus"></i>Add Product</a>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-danger text-center" href="{{route('logout')}}"><i
                                class="bi bi-close"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-10 pb-5">
                <div class="card">
                    <div class="card-header">All Products</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>Sno.</td>
                                    <td>product Image</td>
                                    <td>Name</td>
                                    <td>Description</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)

                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td class="col-2"><img src="{{asset('product_images/') . '/' . $product->image }}"
                                                height="50" width="50"></td>
                                        <td class="col-3">{{$product->name}}</td>
                                        <td class="col-5">{{$product->description}}</td>
                                        <td class="col-4">
                                            <a href="products/{{$product->id}}/" class="btn btn-sm btn-success"><i
                                                    class="bi bi-eye"></i></a>
                                            <a href="" class="btn btn-sm btn-primary"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>
