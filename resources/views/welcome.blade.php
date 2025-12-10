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
            <h3 class="text-uppercase text-center mt-4 fw-bold text-success">Our Added Form</h3>
            <div class="d-flex justify-content-between">
                <div>
                    one
                </div>
                <div>
                    <a href="/create" class="bg-success text-white py-2 px-5 text-center text-decoration-none fs-3">Add new post</a>
                </div>
            </div>
            @if(session('success'))
                <h2 class="fs-3 text-success fw-bold">{{session('success')}}</h2>
            @endif
        </div>
    </section>

    
</body>
</html>