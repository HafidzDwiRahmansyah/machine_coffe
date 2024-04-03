<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Coffe | Coffe Machine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <section class="menu">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-bold py-5">Category Coffe</h2>
                <div class="col-md-12">
                    <div class="row g-2 justify-content-center">
                        @foreach ($data as $item)
                        <div class="col-6">
                            <div class="card border-0 shadow rounded-2">
                                <div class="card-body">
                                    <img class="object-fit" src="/storage/path_to_store/{{ $item->image }}" alt="" width="100%" height="250px">
                                    <h4 class="py-2">{{ $item->name }}</h4>
                                    <h3 class="text-center">Rp {{ number_format($item->price) }}</h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>