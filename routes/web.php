<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/land', function () {
    return view('welcome');
});

Route::get('/teste-1', function () {
    return view('teste');
});

Route::get('/teste-2', function () {


	$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
	$context = stream_context_create($opts);
	$header = file_get_contents('http://www.migalhas.com.br/rss/rss.xml',false,$context);


	$xml = simplexml_load_string($header);
	$json = json_encode($xml);
	$array = json_decode($json,TRUE);

	$image       = $array['channel']['image']['url'];
	$title       = $array['channel']['item'][0]['title'];
	$description = $array['channel']['item'][0]['description'];
	$pubDate     = $array['channel']['item'][0]['pubDate'];
	$link        = $array['channel']['item'][0]['link'];

	$pubDate = strftime("%Y-%m-%d %H:%M:%S", strtotime($pubDate));

	$msg = "	<div class=\"card-noticia-1 text-center\"> 
                    
                    <div class=\"text-left title-news\">
                        $pubDate - $title 
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-4 vcenter img-news\">
                             <img src=\"$image\" width=\"100%\">
                        </div>
                        <div class=\"col-md-8 vcenter text-news\">
                            $description
                        </div>
                    </div>

                    <div class=\"text-right autor-news\">
                        Migalhas
                    </div>

                </div>";

    dd($msg);



});
