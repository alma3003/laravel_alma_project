<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(): string
    {
        $title='Welcome to the backend course';
        return view('pages.index',compact('title'));
    }

    //public function about(): string{
      //  return view('pages.about');
    //}

    //public function services(): string{
       // $data=[
           // '//title'=>'Services',
            //'services'=>[
              //  'Web Technologies 1',
                //'Web Technologies 2',
                //'OOP',
            //]
        //];
        //return view('pages.services');
    //}
}
