<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add | Coffe Netbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="/image/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <section class="crud">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow rounded-2">
                        <div class="card-body">
                            <h2 class="text-center my-5">Tambah data kopi</h2>
                            <form action="/add" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-5 justify-content-center">
                                    <div class="col-lg-6">
                                        <label class="form-label" for="name">name</label>
                                        <input class="form-control" type="text" name="name" id="name"
                                            placeholder="name..." required><br>
                                        <label class="form-label" for="price">price</label>
                                        <input class="form-control" type="text" name="price" id="price"
                                            placeholder="price..." required><br>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label" for="image">image</label>
                                        <input class="form-control" type="file" name="image" id="image"
                                            placeholder="image..." required><br>
                                        <label class="form-label" for="qty">quantity</label>
                                        <input class="form-control" type="text" name="qty" id="qty" placeholder="qty..."
                                            required><br>
                                        <button class="btn btn-primary mx-auto d-block" type="submit">Tambah
                                            Kopi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h3 class="text-center py-3">Data Kopi</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coffe as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->image }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>
                                            <button class="btn btn-warning">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-danger">
                                                <i class="bi bi-trash3"></i>
                                            </button>
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
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    @if (session('berhasil'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
            });
        Toast.fire({
            icon: "success",
            title: "{{ session('berhasil') }}"
        });
    </script>
    @endif
</body>

</html>