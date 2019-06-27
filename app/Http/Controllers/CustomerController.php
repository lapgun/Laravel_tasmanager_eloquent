<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Model\Student;

class CustomerController extends Controller
{
    public function getId($id)
    {
        return Student::find($id);
    }

    public function index()
    {
        $customers = Student::all();
        return view('index', compact('customers'));
    }

    public function showFormEdit($id)
    {
        $customer = Student::where('id',$id)->first();
        return view('edit', compact('customer'));
    }

    public function edit($id, Request $request)
    {
        $array['name'] = $request->name;
        $array['phone'] = $request->phone;
        $array['address'] = $request->address;
        $customer =$this->getId($id);
        $customer->update($array);
        return redirect()->route('index');
    }

    public function delete($id)
    {
        $customer =$this->getId($id);
        $customer->delete();
        return redirect()->route('index');
    }

    public function getFromAdd()
    {
        return view('add');
    }

    public function addForm(Request $request)
    {
        $array['name'] = $request ->name;
        $array['phone'] =$request->phone;
        $array['address'] = $request->address;
//        $customers = Student::all();
        Student::create($array);
        return redirect()->route('index');
    }

    public function view($id)
    {
        $customer = Student::where('id',$id)->first();
        return view('view', compact('customer'));
    }
}

