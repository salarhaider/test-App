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
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="card-title text-center">
                                <h3>Login</h3>
                                <hr>
                            </div>
                        </div>
                        <form class="row g-3" method="POST" action="{{route('login_user')}}">
                            @csrf
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword4">
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>

                            <div class="col-7">
                                <p>Not a member? <a href="{{ route('register') }}">Login</a></p>
                            </div>
                        </form>
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
