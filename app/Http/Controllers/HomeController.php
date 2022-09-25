<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function userDashboard()
    {
        return view('userDashboard');
    } 
  
    public function adminDashboard()
    {
        return view('adminDashboard');
    }
  
    public function managerDashboard()
    {
        return view('managerDashboard');
    }

    public function editorDashboard()
    {
        return view('editorDashboard'); 
    }
}