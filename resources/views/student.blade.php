<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet"  href="{{asset('css/style.css')}}">

    <title>Students System</title>
  </head>
  <body>
  @include("navbar")
    
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student management system</h1>
        </div>
    </div>

    @if($layout == 'index')
        <div  class="container-fluid mt-4">
            <div class="row">
             <section class="col-md-8">
                @include("studentlist")
             </section>
             <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'show')

        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col">
                </section>
            </div>
        </div>

    @elseif($layout == 'create')

        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-8">
                    @include("studentlist")
                </section>
                <section class="col-md-4">
                <div class="card" >
                    <img  src="https://www.valueresearchonline.com/content-assets/images/46166_managing-childrens-education__w1200__.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">List of students</h5>
                        <p class="card-text">here you can find all information about students.</p>



                    <form action="{{ url('/store') }}" methode="post">
                    @csrf
                        <div class="mb-3">
                            <label >CNE</label>
                            <input type="text" name="cne" class="form-control" >
                        </div>

                        <div class="mb-3">
                            <label >First Name</label>
                            <input type="text" name="FirstName" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label >Second Name</label>
                            <input type="text" name="SecondName" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label >Age</label>
                            <input type="text" name="age" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label >Speciality</label>
                            <input type="text" name="speciality" class="form-control" >
                        </div>
                        <input type="submit" class="btn btn-info" value="Save">
                        <input type="submit" class="btn btn-warning" value="Reset">
                    
                    </form>
                    </div>
                </section>
            </div>
        </div>

    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("studentlist")
                </section>
                <section class="col">
                <div class="card" >
            <img  src="https://www.valueresearchonline.com/content-assets/images/46166_managing-childrens-education__w1200__.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">List of students</h5>
                <p class="card-text">here you can find all information about students.</p>


                <form action="{{ url('/update/'.$student->id) }}" methode="post">
                    @csrf
                        <div class="mb-3">
                            <label >CNE</label>
                            <input value="{{ $student->cne }}" type="text" name="cne" class="form-control" >
                        </div>

                        <div class="mb-3">
                            <label >First Name</label>
                            <input value="{{ $student->FirstName }}" type="text" name="FirstName" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label >Second Name</label>
                            <input value="{{ $student->SecondName }}" type="text" name="SecondName" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label >Age</label>
                            <input value="{{ $student->age }}" type="text" name="age" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label >Speciality</label>
                            <input value="{{ $student->speciality }}" type="text" name="speciality" class="form-control" >
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="submit" class="btn btn-warning" value="Reset">
                    
                    </form>
            </div>
                </section>
            </div>
        </div>
    @endif


    <footer></footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>