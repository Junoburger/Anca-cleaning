<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
    return view('pages.index');
  }

  public function about(){
    return view('pages.about');
  }


  public function service(){
    return view('pages.service');
  }

  public function partners(){
    return view('pages.partners');
  }

  public function public(){
    return view('pages.public');
  }

  public function residential(){
    return view('pages.residential');
  }

   public function hospitality(){
    return view('pages.hospitality');
  }
     public function retail(){
    return view('pages.retail');
  }
       public function other(){
    return view('pages.other');
  }
  public function ecsp(){
return view('pages.ecsp');
}
}
