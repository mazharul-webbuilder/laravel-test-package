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
    <section class="" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <h4 class="text-center text-dark"><span style="margin-right: 5px;"><a class="btn btn-sm btn-info" href="{{route('employee.create')}}">Create</a></span >Manage Employee<span style="margin-left: 5px;"><a class="btn btn-sm btn-primary" href="{{route('mHome')}}">Home</a></span></h4>
                    <table class="table table-bordered mx-auto" style="margin-top: 20px">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Salary</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->address}}</td>
                            <td>Tk. {{number_format($employee->salary)}}</td>
                            <td style="text-align: center">
                                <a href="{{route('employee.edit', ['id' => $employee->id])}}"  class="btn btn-sm btn-primary">Edit</a>
                                <a href="" onclick="event.preventDefault(); document.getElementById('employeeDeleteForm{{$employee->id}}').submit(); " class="btn btn-sm btn-danger">Delete</a>
                                <form action="{{route('employee.delete', ['id' => $employee->id])}}" id="employeeDeleteForm{{$employee->id}}" method="POST">
                                   @csrf
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>