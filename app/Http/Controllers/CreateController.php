<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Departament;
use App\Models\Employee;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    public function create(){
        $departament = Departament::all();
        $job = Job::all();
        return view('create', compact('departament', 'job'));
    }

    public function store(StoreRequest $request){
        DB::table('employees')->insert([
            'surname' => $request['surname'],
            'departament_id' => $request['departament'],
            'job_id' => $request['job'],
            'receipt' => $request['receipt'],
            'data' => $request['data'],
            'supplement' => $request['supplement'],
        ]);

        $employee = Employee::find(Employee::max('id'));
        return back()->with('employee', $employee);
    }
}
