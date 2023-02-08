<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- icon beside title --}}
    <link rel="icon" href="{{ asset('gambar/icon.png') }}">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/list-groups/">



    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/list-groups.css" rel="stylesheet">
    

<title>MAHASISWA</title>
  </head>
  <body>
    <div style="padding-top: 100px; width:80%; margin: auto;" >
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 400px; margin:auto; margin-bottom: 30px">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="border-bottom" style="text-align: center; font-family: 'Inter', sans-serif;font-weight: 600; font-size:25px; padding-bottom:10px;">Add Mahasiswa</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/mhs" role="form" class="php-email-form">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">

        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </div>
  </body>
</html>