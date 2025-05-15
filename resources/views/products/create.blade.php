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
        <div class="row justify-content-center">
                <div class="col-md-10 mt-3">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header bg-dark d-flex justify-content-between">
                            <h3 class="text-white">Create Products</h3>
                            <a href="{{ route('products.list') }}" class="btn btn-dark">Back</a>
                        </div>
                        
                        <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                    <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="@error('name') is-invalid  @enderror form-control form-control-lg" placeholder="Name" value="{{ old('name') }}" name="name"/>
                                    @error('name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                    </div>

                                    <div class="mb-3">
                                    <label for="" class="form-label">Sku</label>
                                    <input type="text" class="@error('sku') is-invalid  @enderror form-control form-control-lg" placeholder="Sku" value="{{ old('sku') }}" name="sku"/>
                                    @error('sku')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                    </div>

                                    <div class="mb-3">
                                    <label for="" class="form-label">Price</label>
                                    <input type="text" class=" @error('price') is-invalid  @enderror form-control form-control-lg" placeholder="Price" value="{{ old('price') }}" name="price"/>
                                    @error('price')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <textarea value="{{ old('description') }}" name="description" class="form-control" cols="30" rows="5" placeholder="Enter Description"></textarea>
                                    </div>

                                    <div class="mb-3">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" class="form-control form-control-lg" placeholder="Image" value="" name="image"/>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>