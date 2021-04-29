<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <section class="container">
        <section class="">
            <div class="d-flex justify-content-between">
                <h3>Create New Todo </h3>
                <a href="" class="btn btn-primary">List Of Todo</a>
            </div>
        </section>


        <section class="my-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <p class="cart-header text-center my-1 p-3 h4 bg-light">Create New Todo</p>
                        <div class="card-body">
                            <form action="{{ url('api/todo/store') }}" method="post">
                                @csrf
                                <div class="form-gorup">
                                    <label for="">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="title *" id="">
                                </div>

                                <div class="form-gorup">
                                    <label for="">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" placeholder="Descriptionn" id="" cols="30" class="form-control" rows="10"></textarea>
                                </div>

                                <div class="my-3 text-center">
                                    <input type="submit" name="" class="btn btn-primary" value="Create New Todo" id="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
