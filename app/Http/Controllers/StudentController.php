<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Contacts;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student=Student::with('getcontact')->find(5);
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student=Student::create([
            'name'=>'Zeeshan',
            'age'=>'26',
            'gender'=>'Male'
        ]);

        $student->getcontact()->create([
            'email'=>'zeeshan@gmail.com',
            'phone'=>'213413423',
            'address'=>'Park View',
            'city'=>'Isb'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
