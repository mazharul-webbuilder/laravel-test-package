<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Create Employee</title>
</head>
<body>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card" style="margin-top: 10%; margin-left: 30%; border: 1px solid seashell; padding: 20px;">
                        <h4 class="text-dark text-center py-2" style="padding-bottom: 20px">Employee Create Form</h4>
                        <form action="{{route('employee.store')}}" method="POST">
                            @csrf
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-md-3">
                                    <label for="name" class="form-label">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Enter Name" pattern="[a-zA-Z][a-zA-Z ]{2,}" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-md-3">
                                    <label for="address" class="form-label">Address</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Enter Full Address" name="address" pattern="[a-zA-Z][a-zA-Z ]{2,}" class="form-control" >
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-md-3">
                                    <label for="salary" class="form-label">Basic Salary</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" placeholder="Enter Basic Salary" name="salary" class="form-control" >
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Create">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>