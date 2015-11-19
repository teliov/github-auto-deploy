<?php
/**
 * Created by PhpStorm.
 * User: teliov
 * Date: 11/19/15
 * Time: 5:32 PM
 */

<<<<<<< HEAD
require_once(__DIR__."/vendor/autoload.php");

=======
>>>>>>> 243ff3f68017a55d3cae974071caad2e3cecad54
$klein = new \Klein\Klein();

$klein->respond('POST', '/handle', function(\Klein\Request $request, \Klein\Response $response){
    $file = fopen("log.txt", "a");
    fwrite($file, print_r($_SERVER, true));
    fwrite($file, "++++++++++++++++++\n");
    $data = json_decode($request->body());
    fwrite($file, print_r($data, true));
    return $response->json("It worked");
});

$klein->dispatch();