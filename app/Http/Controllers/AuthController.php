<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  class AuthController extends Controller
  {
    public function register () {
      return view('register');
    }

    public function welcome (Request $request) {
      $fname = $request["Fname"];
      $lname = $request["Lname"];
      return view('welcome', ['fname' => $fname], ['lname' => $lname]);
    }
  }