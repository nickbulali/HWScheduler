<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        
            $Appointment = new Appointment;
            $Appointment->patient_id = $request->input('patient_id');
            $Appointment->location = $request->input('location');
            $Appointment->appointment_date = $request->input('appointment_date');
            $Appointment->appointment_time = $request->input('appointment_time');
       
    }
}
