<!doctype html>
<html lang="en" dir="ltr">

    

<head>
        <meta charset="utf-8">
        <title>Data</title>
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
        
        <section class="bg-home d-flex align-items-center" style="background: url('images/1.jpg') center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0 p-4 rounded shadow">
                        <table class="table table-hover">
                              <div class="text-center mb-2 d-flex justify-content-between">
                                    <div>
                                    <a href="/add" class="text-primary h4 text-uppercase">CrudCode</a>
                                    </div>
                                        <div class="d-flex">
                                        <form method="get" action="search">
                                        <input class="form-control me-2" value="{{@$search}}" type="text" placeholder="Search" aria-label="Search" name="search">
                                        <button class="btn btn-outline-warning" type="submit">Search</button>
                                        </form>
                                         
                                    </div>
                                        
                                </div>
                                 <thead>
                                <tr>
                               
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created</th>
                                <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            @foreach($data as $datas)
                            <tbody>
                                <tr>
                               
                                <td>{{$datas->id}}</td>
                                <td>{{$datas->name}}</td>
                                <td>{{$datas->email}}</td>
                                <td><img src="{{ asset('uploads/dummy/' . $datas->image) }}" alt="" height="50px" width="50px"></td>
                                <td>{{$datas->created_at}}</td>
                                <td>
                                    <a href="{{'delete/'.$datas->id}}" class="btn btn-danger">Delete</a>
                                    <a href="{{'edit/'.$datas->id}}" class="btn btn-primary">Edit</
                                </td>
                                </tr>
                             
                            </tbody>
                            @endforeach
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- JAVASCRIPT -->
        <script src="libs/bootstrap/js/bootstrap.bundle.min.html"></script>
    </body>



</html>


