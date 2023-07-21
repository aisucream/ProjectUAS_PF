@extends('layouts/layout')

@section('konten')
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .centered-column {
                display: flex;
                flex-direction: row;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                  <h1 class="text-center">SISTEM INFORMASI PREDICT</h1>
                  <div class="centered-column">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kotak 1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kotak 2">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kotak 3">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kotak 4">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kotak 5">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kotak 6">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kotak 7">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kotak 8">
                            </div>
                        </div>
                    </div>
                    <div class="centered-column">
                        <button type="submit" class="btn btn-primary"> Generate</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

  </div>
</section><!-- End About Section -->
@endsection

  