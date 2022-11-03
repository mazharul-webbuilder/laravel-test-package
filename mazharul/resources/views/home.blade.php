<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Test Package</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card" style="margin-top: 20%; margin-left: 48%;">
                        <a href="{{route('employee.create')}}" class="btn btn-success">Create Employee</a>
                        <a href="{{route('employee.manage')}}" class="btn btn-primary">Manage Employees</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>
</html>