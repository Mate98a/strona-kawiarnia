<?php
require("vendor/autoload.php");
 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
 
require 'vendor/autoload.php';

// Na podstawie pliku home.php należy dodać podstronę kontaktu
 
$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {
    $view = 'home.php';
    $title = ' Strona główna ';
    require('./template.php');
});

$app->get('/realization', function (Request $request, Response $response) {
    $view = 'realization.php';
    $title = ' Oferta ';
    require('./template.php');
});

$app->get('/contact', function (Request $request, Response $response) {
    $view = 'contact.php';
    require('./template.php');
});


$app->post('/contact', function (Request $request, Response $response) {
    $errors = '';
    $myemail = 'mateuszhti@gmail.com';
    if(empty($_POST['name'])  || 
       empty($_POST['email']) || 
       empty($_POST['message']))
    {
        $errors .= "\n Error: Wszystkie pola wymagane";
    }
    
    $name = $_POST['name']; 
    $email_address = $_POST['email']; 
    $message = $_POST['message']; 
    
    if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
    $email_address))
    {
        $errors .= "\n Error: Niepoprawny adres e-mail";
    }
    
    if( empty($errors))
    {
        $to = $myemail; 
        $email_subject = "Formularz kontaktowy: $name";
        $email_body = "Otrzymałeś nową wiadomość. ".
        " Szczegoły:\n Imie: $name \n Email: $email_address \n wiadomosc \n $message"; 
        
        $headers = "From: $myemail\n"; 
        $headers .= "Reply-To: $email_address";
        
        mail($to,$email_subject,$email_body,$headers);
        
        header('Location: contact-form-thank-you.html');
    } 
    $view = 'contact.php';
    require('./template.php');
});


$app->run();
?>