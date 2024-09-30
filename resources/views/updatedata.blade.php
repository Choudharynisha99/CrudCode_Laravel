
<!doctype html>
<html lang="en" dir="ltr">

    

        <meta charset="utf-8">
        <title>Update</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CrudCode Website Using Laravel">
        <meta name="keywords" content="Software, multi-uses, HTML, Clean, Modern">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Css -->
        <link href="/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">
        <link href="/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">

    </head>

    <body>
        
        <section class="bg-home d-flex align-items-center position-relative" style="background: url('/images/1.jpg') center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card form-signin border-0 p-4 rounded shadow">
                            <form method="post" action="/edit-student/{{$edit->id}}" enctype="multipart/form-data">
                                @csrf
                                <div class="text-center mb-4">
                                    <a href="/add" class="text-primary h4 text-uppercase">CrudCode</a>
                                </div>
                                <h5 class="card-title">Update your account</h5>
                                 <input type="hidden" name="_method"  value="PUT"/>
                                <div class="form-floating mb-2">
                                    <input type="text" name="name" value="{{$edit->name}}" class="form-control" id="floatingInput">
                                    <label for="floatingInput">First Name</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input type="email" name="email" class="form-control" value="{{$edit->email}}" id="floatingEmail">
                                    <label for="floatingEmail">Email Address</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input type="password" name="password" value="{{$edit->password}}" class="form-control" id="floatingPassword" >
                                    <label for="floatingPassword">Password</label>
                                </div>
                                
                                <div class="form-floating mb-2">
                                    <input type="file" name="file"  class="form-control" id="floatingPassword" >
                                    <img src="{{ asset('uploads/dummy/'.$edit->image) }}" alt="" height="100px" width="100px">
                                </div>

                                <button class="btn btn-primary" type="submit">Update</button>
                                 <a href="/list" class="btn btn-danger">Cancel</a>
                                <!--end col-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- JAVASCRIPT -->
        <script src="libs/bootstrap/js/bootstrap.bundle.min.html"></script>
    </body>



</html>
  


