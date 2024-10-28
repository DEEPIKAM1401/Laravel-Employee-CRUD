<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employees = Employee::all();
        // $employees = Employee::orderBy('id', 'desc')->get();
        $employees = Employee::orderBy('id', 'desc')->paginate(5);

        return view('index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:employees,email|email',
            'joining_date' => 'required',
            'salary'=> 'required',
            'phone'=> 'required|numeric|unique:employees,phone',
        ],[
            'phone.unique' => 'Phone number already exist'
        ]);

        
        $data = $request->except('_token');
        //mass assignment
        Employee::create($data);

        //Insert single row
        // $employee = new Employee;

        // $employee->name =  $data['name'];
        // $employee->email =  $data['email'];
        // $employee->joining_date =  $data['joining_date'];
        // $employee->salary =  $data['salary'];
        // $employee->phone =  $data['phone'];
        // $employee->is_active =  $data['is_active'];
        // $employee->save();

        return redirect()
        ->route('employee.index')
        ->withDp('Employees has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
    //    $employee = Employee::find($id);
       return view('edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        // dd($employee);
        // dd($request->all());

        $data = $request->all();
         $request->validate([
            'name' => 'required',
            'email' => 'required|unique:employees,email,'.$employee->id.'|email',
            'joining_date' => 'required',
            'salary'=> 'required',
            'phone'=> 'required|numeric|unique:employees,phone,'.$employee->id,
        ],[
            'phone.unique' => 'Phone number already exist'
        ]);
        // $employee = Employee::find($id);
        $employee->update($data);
        // dd('sucessfully updated');
        return redirect()->route('employee.edit', $employee->id)->withSuccess('Employee details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
       $employee->delete();
       return redirect()->route('employee.index')
       ->withDp("Employee deleted successfully");
    }
}
