<?php
/* namespace: you belong in this folder, you cannot leave unless given explicit orders 
*/
namespace App\Http\Controllers;

/* use allows this file to access outside namespace */

class PagesController extends Controller {
	/* Each page or request is an action, and an action is a function */

	public function getIndex() {
		# process variable data or params
		# talk to the model
		# receive data back from the model
		# compile or process data from model if required
		# pass that data to the correct view
		return view('pages.welcome');
	}

	public function getAbout() {
		$first = 'Ji';
		$last = 'Paik';
		$email = '@';
		$fullname = $first . " " . $last;
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}


}