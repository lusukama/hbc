<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GymController extends Controller
{
    public function index(){
      return view('welcome');
    }

    // About-the-gym
    public function about(){
      return view('about');
    }

    // Appointment Gym
    public function bookingTrainer(){
      return view('bookingTrainer');
    }

}
