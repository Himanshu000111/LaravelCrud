<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>

  <body>
   
    <div class="bg-dark py-3">
        <h3 class="text-center text-white">
            Laravel Crud Operation
        </h3>
    </div>

    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-10 text-end">
            <a href="{{ route('products.create') }}" class="btn btn-dark">Create</a>
            </div>
        </div>

        <div class="row justify-content-center">
            @if (Session::has('success'))
            <div class="col-md-10 mt-3">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif
                <div class="col-md-10 mt-3">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header bg-dark">
                            <h3 class="text-white">Products</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Product Image</th>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                @if ($products->isNotEmpty())
                                    @foreach ($products as $product)
                                    <tr>
                                       <td>{{ $product->id }}</td> 
                                       <td class="text-center">
                                            @if ($product->image != "")
                                                <img src="{{ asset('uploads/products/'.$product->image) }}" width="50" class="mx-auto" alt="dsfg" >
                                            @endif
                                        </td> 
                                       <td>{{ $product->name }}</td> 
                                       <td>{{ $product->sku }}</td> 
                                       <td>{{ $product->price }}</td> 
                                       <td>{{ $product->created_at }}</td> 
                                       <td>
                                            <a href="#" class="btn btn-dark">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td> 
                                    </tr> 
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>