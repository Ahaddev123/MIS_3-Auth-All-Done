<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function ManagementDashboard(){
        return view('management.management_dashboard');

    }
}
