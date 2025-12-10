<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">

    <h3 class="text-uppercase text-center mt-4 fw-bold text-success">Our Added Form</h3>

    <div class="d-flex justify-content-between mb-3">
        <div>one</div>
        <div>
            <a href="/create" class="bg-success text-white py-2 px-4 text-decoration-none fs-5">Add new post</a>
        </div>
    </div>

    @if(session('success'))
        <h2 class="fs-4 text-success fw-bold">{{ session('success') }}</h2>
    @endif

    <h2 class="mb-4 text-center">Post List</h2>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created At</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $key => $post)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->description }}</td>

                <td>
                    <img src="{{ asset('uploads/' . $post->image) }}" 
                         width="60" height="60" style="object-fit: cover;">
                </td>

                <td>{{ $post->created_at->format('d M, Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
