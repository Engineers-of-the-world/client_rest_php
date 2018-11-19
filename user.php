<?php
// Point to where you downloaded the phar
include('./httpful/httpful.phar');

//get
/*$uri = "http://localhost:8080/api/user/all";
$response = \Httpful\Request::get($uri)->send();
 
echo $response;*/

//post --save
$uri = "http://localhost:8080/api/user/save";
$response = \Httpful\Request::post($uri)                  // Build a PUT request...
    ->sendsJson()                               // tell it we're sending (Content-Type) JSON...
    //->authenticateWith('username', 'password')  // authenticate with basic auth...
    ->body('{
        "id": null,
        "campo1": "jared",
        "campo2": "123456",
        "situacion": "1"
    }')             // attach a body/payload...
    ->send(); 
/*//put
$uri = "http://localhost:8080/api/user/update";
$response = \Httpful\Request::put($uri)                  // Build a PUT request...
    ->sendsJson()                               // tell it we're sending (Content-Type) JSON...
    //->authenticateWith('username', 'password')  // authenticate with basic auth...
    ->body('{
        "id": 11,
        "campo1": "dedidisa",
        "campo2": "123",
        "situacion": "1"
    }')             // attach a body/payload...
    ->send(); 

//delete
$uri = "http://localhost:8080/api/user/delete/11";
$response = \Httpful\Request::delete($uri)                  // Build a PUT request...
    ->send(); */
//get
$uri = "http://localhost:8080/api/user/all";
$response = \Httpful\Request::get($uri)->send();
 
echo $response;