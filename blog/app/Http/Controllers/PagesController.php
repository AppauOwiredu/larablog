<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
	//creating each page into actions called functions

	public function getIndex() {
		/*
		process variable data or parameters
		talk to the model
		receive from the model
		compile or process data from the model if needed
		pass data to the correct view
		*/
		return view('pages.welcome');

	}

	public function getAbout() {
		$first = 'Appau';
		$last = 'Owiredu';


        $email = 'appauowiredu@gmail.com';
		$fullname = $first . " " .$last;
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);

	}

	public function getContact() {
		return view('pages.contact');

	}

}