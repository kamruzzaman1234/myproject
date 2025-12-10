<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <section class="max-w-[700px] w-full mx-auto">
        <div class="container">
            <h3 class="text-uppercase text-center mt-4 fw-bold text-success">Create Post</h3>
            <div class="d-flex justify-content-between">
                <div>
                    one
                </div>
                <div>
                    <a href="/" class="bg-success text-white py-2 px-5 text-center text-decoration-none fs-3">Back Home page</a>
                </div>
            </div>

           <div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h4 class="mb-4 text-center">Add Product</h4>

       <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">

        <!-- Name -->
        <div class="col-md-6">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter Product Name">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description -->
        <div class="col-md-6">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-control" value="{{old('description')}}" placeholder="Enter Description">
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image Upload -->
        <div class="col-md-6">
            <label class="form-label">Product Image</label>
            <input type="file" name="image" value="{{old('image')}}" class="form-control">
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="col-12">
            <button class="btn btn-success w-100 mt-3" type="submit">Save Product</button>
        </div>

    </div>
</form>


    </div>
</div>
        </div>
    </section>

    
</body>
</html>