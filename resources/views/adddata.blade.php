
<!doctype html>
<html lang="en" dir="ltr">

    

        <meta charset="utf-8">
        <title>Signup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CrudCode Website Using Laravel">
        <meta name="keywords" content="Software, multi-uses, HTML, Clean, Modern">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Css -->
        <link href="css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">

    </head>

    <body>
        
        <section class="bg-home d-flex align-items-center position-relative" style="background: url('images/1.jpg') center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card form-signin border-0 p-4 rounded shadow">
                            <form method="post" action="add"  enctype="multipart/form-data">
                                @csrf
                                <div class="text-center mb-4">
                                    <a href="/" class="text-primary h4 text-uppercase">CrudCode</a>
                                </div>
                                <h5 class="card-title">Register your account</h5>
                            
                                <div class="form-floating mb-2">
                                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Harry">
                                    <label for="floatingInput">First Name</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                                    <label for="floatingEmail">Email Address</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" name="file" class="form-control" id="floatingPassword"> 
                                </div>
                            
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                </div>
                
                                <button class="btn btn-primary w-100" type="submit">Register</button>

                                <div class="col-12 text-center mt-3">
                                    <p class="mb-0 mt-3"><span class="text-dark me-2">Already have an account ?</span> <a href="/login" class="text-dark fw-semibold">Sign in</a></p>
                                </div><!--end col-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- JAVASCRIPT -->
        <!-- <script src="libs/bootstrap/js/bootstrap.bundle.min.html"></script> -->
    </body>



</html>
    


