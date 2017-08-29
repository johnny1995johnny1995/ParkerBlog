<?php
namespace App\Http\Controllers;

class PagesController extends Controller {
    

     public function getIndex() {
        return view('pages.welcome');
     }

     public function getAbout() {
        // $email = 'test@test.com';
        return view('pages.about');
     }

     public function getContact() {
        return view('pages.contact');
     }
    
}