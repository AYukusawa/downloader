<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Masih\YoutubeDownloader\YoutubeDownloader;

class VideoController extends Controller
{
    //

    public function download(Request $request){

		$this->validate($request,[
    		'video' => 'required'
    	]);
    	
    	$youtube = new YoutubeDownloader($request->video);

		$result = $youtube->getInfo();
		if($result){
			return view('watch',['result'=> $result]);
		}
    

    }
}
