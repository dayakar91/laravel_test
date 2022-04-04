<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Responce;
use App\Test;
use DB;


use App\Events\PostCreated;
use App\Listeners\NotifyPostCreated;

class TestController extends Controller
{
    //
	
	public function getform(){
		return view('testform');
	}
	
	
	public function postform(Request $request){
		$test= new Test;
		$test->title=$request->input('title');
		$test->description=$request->input('description');
		$test->location=$request->input('location');
		$test->active=$request->input('active');
		$test->save();
		
		event(new PostCreated($test));
		//return redirect('/getform');
	}
	
	public function alltests(){
		$tests=Test::all();
		return view('testresults',compact('tests'));
		
	}
	public function edit($id){
		$edit=Test::find($id);
		return view('testedit',compact('edit'));
	}
	
	public function editform(Request $request,$id){
		$test=Test::find($id);
		$test->title=$request->input('title');
		$test->description=$request->input('description');
		$test->location=$request->input('location');
		$test->active=$request->input('active');
		$test->save();
		//event(new PostCreated($test));
		return redirect('/alltests');
	}
	public function deletepage($id){
		$delete=Test::find($id);
		$delete->delete();
		return view('alltests');
	}
	public function softdelete($id){
		$softdelete=Test::find($id);
		$softdelete->delete();
	}
	public function readsoftdelete($id){
		$softdeletedata=Test::withTrashed()->where('id',$id)->get();  
		return $softdeletedata;  
	}
	public function restoresoftdelete($id){
		$softdeletedata=Test::withTrashed()->where('id',$id)->restore();  
		return $softdeletedata;  
	}
	public function forcesoftdelete($id){
		Test::onlyTrashed()->forceDelete();  

	}
	public function alltestsjoins(){
		//all records with two tables
		$result=Test::where('test.id','>',0)->leftJoin('test_posts as tp','test.id','=','tp.test_id')->select('*')->get();
		return $result;
		
	}
}
