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
		return view('pages/welcome');

	}

	public function getAbout() {
		return view('pages/about');

	}

	public function getContact() {
		return view('pages/contact');

	}

}