<?php
$loader = require __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function($name) use($app) {    
    return "Hello $name!\n";
});

class AppInfo
{
    public function getInfo()
    {
		$info = '{"service": {
			"name": "Example Service in PHP",
			"description": "This is a sample scaffolding for creating a PHP microservice",
			"language": "PHP",
			"dependencies": [
				{"silex": "The PHP micro-framework based on the Symfony2 Components"},
				{"composer": "Composer is a tool for dependency management in PHP."}	
			]
			},
			"links":{
			"self":"/info"
		}}';

        return $info;
    }
}	
	
$app->get('/info', function () {
	$info = new AppInfo();
	$data = $info->getInfo();
    return $data; 
});

$app->run();

