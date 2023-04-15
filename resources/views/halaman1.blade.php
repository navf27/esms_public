<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style1.css" />

    <title>halaman 1</title>
  </head>
  <body>
  <section class="vh-100" style="background-color: white;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px; background-color: #b7e2fd;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center mb-2">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Judul Aplikasi</p>
                <form class="mx-1 mx-md-4" method="POST" action="{{ route('halaman1.store') }}"> @csrf
                  <div class="mb-2">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example3c" class="form-control form-control-lg" placeholder="Nama" name="nama" style="border-radius: 10px;" />
                  </div>
                  <div class="mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example4c" class="form-control form-control-lg" placeholder="No.HP" name="hp" style="border-radius: 10px;"/>
                  </div>
                  <div class="mb-2">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example4cd" class="form-control form-control-lg" placeholder="Alamat" name="alamat" style="border-radius: 10px;"/>
                  </div>
                  <div class="mb-2">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-Laki">
                      <label class="form-check-label" for="jenis_kelamin1">
                        Laki - Laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan" >
                      <label class="form-check-label" for="jenis_kelamin2">
                       Perempuan
                      </label>
                    </div>
                  </div>
                  <div >
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Kata Kunci</label>
                      <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kata_kunci"></textarea>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" style="border-radius: 10px;" value="Submit">
                  </div>
                </form>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="{{ asset('img/g.svg') }}"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript">
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
