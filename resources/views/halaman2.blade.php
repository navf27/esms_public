<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="style1.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <title>Hello, world!</title>
</head>

<body>
  <section>
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Result</p>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-4">
        <p class="fw-bolder">Nama : {{ session()->get('nama') }}</p>
      </div>
      <div class="col-3">
        <p class="fw-bolder">Alamat : {{ session()->get('alamat') }}</p>
      </div>
    </div>

    <form class="row" action="">
      <div class="col-4">
        <p class="fw-bolder">No.HP : {{ session()->get('hp') }}</p>
      </div>
      <div class="col-5">
        <p class="fw-bolder">Jenis Kelamin : {{ session()->get('jenis_kelamin') }}</p>
      </div>
      <div class="col-2">
        <input type="text" class="form-control" placeholder="">
      </div>
      <div class="col-1">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>
  </section>
  <!-- <div class="card table-responsive" style="border-radius: 10px;">
        <table class="table">
          <tbody>
            <tr>
              <th scope="col">Nama :</th>
            </tr>

            <tr>
              <th scope="row">No HP :</th>
            </tr>

            <tr>
              <th scope="row">Jenis Kelamin :</th>
            </tr>

            <tr>
              <th scope="row">ALamat :</th>
            </tr>
          </tbody>
        </table>
      </div> -->

  <!-- <div class="justify-content-center mt-4">
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" id="Search" class="form-control form-control-lg" placeholder="Cari Disini" />
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <button type="button" class="btn btn-primary btn-lg" style="border-radius: 10px;">Search</button>
            </div>
          </div>
        </div>
      </div> -->

  <!-- </div> -->


  <section>
    <div class="container-fluid">

      <div class="card mx-md-4 mt-4" style="border-radius: 30px;">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-md">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">No Agenda</th>
                  <th scope="col">Dari</th>
                  <th scope="col">Perihal</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mail as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->hp }}</td>
                  <td>{{ $item->alamat }}</td>
                </tr>
                @endforeach
                {{-- <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>placeholder</td>
                  <td>irrelevant</td>
                  <td>visual</td>
                </tr> --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>