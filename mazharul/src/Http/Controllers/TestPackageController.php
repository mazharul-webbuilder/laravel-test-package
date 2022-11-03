<?php

namespace Incevio\Package\Mazharul\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Incevio\Package\Mazharul\Models\Employee;
use Illuminate\Validation\Validator;



class TestPackageController extends Controller
{
    public function index()
    {
        return view('mazharul::home');
    }
    public function create()
    {
        return view('mazharul::create_form');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|min:3',
                'address' => 'required',
                'salary' => 'required|min:4'
            ]
        );

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect('/crud-test');

    }

    public function manage()
    {
        $employees = Employee::orderBy('id', 'desc')->get();
        return view('mazharul::manage', ['employees' => $employees]);
    }
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('mazharul::edit', ['employee' => $employee]);
    }
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect('crud-test/employee/manage');
    }
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete($id);

        return redirect('crud-test/employee/manage');
    }
}
