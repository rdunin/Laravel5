<?php namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use DB;
use App\Models\Estate;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Estate $estaetModel)
	{
		
		$posts = $estaetModel->get();
		//dd($posts[0]->title);
		
		$user = User::find(1);
		
		if ($user->is('admin')) // or you can pass an id
		{
		    //echo 'admin';
		}else{
			//echo 'no';
		}
		
		//if(Auth::user()){
			//$bd = Schema::connection('mysql2')->create('newtable', function($table) { $table->increments('id'): '1';});
			//echo Auth::id();
			//echo Auth::user()->email;
			
			
			//$db2 = DB::connection('mysql2');
			//$u = $db2->table('testtable')->get();
			//print_r($u);
			
		//}
		
		//echo $user->level();
		
		return view('home');
	}

}
