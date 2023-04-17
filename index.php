<?php
require 'vendor/autoload.php';

use Lfb9\Instagramclone\modelos\imagePost;
use Lfb9\Instagramclone\modelos\User;
use Lfb9\Instagramclone\modelos\videoPost;

$lucas = new User("Lucas Bussolotti", "lucas", "lucasfbussolotti@gmail.com", "LucAsF");
$marcos = new User("Marcos Pozzo", "marcos", "marcospozzo@gmail.com", "MarcOsp");
$micaela = new User("Micaela Cabrera", "mica", "micacabrera@gmail.com", "pompe123");
$gabriel = new User("Gabriel Sanchez", "fresias", "gabrielsanchez@gmail.com", "fresias123");

$lucasPost = new imagePost("Aprendiendo POO en php ", "imagen.jpg");
$marcosPost = new imagePost("De vacaciones ", "imagen2.jpg");
$micaelaPost = new videoPost("Jugando con la pompe", "video.mp4");
$gabrielPost = new videoPost("Enseñando en la escuela", "video2.mp4");


$lucas->publish($lucasPost);
$marcos->publish($marcosPost);
$micaela->publish($micaelaPost);
$gabriel->publish($gabrielPost);


$lucasPost->addLike($micaela);

$marcosPost->addLike($lucas);
$marcosPost->addLike($gabriel);


$micaelaPost->addLike($lucas);
$micaelaPost->addLike($marcos);
$micaelaPost->addLike($micaela);
$micaelaPost->addLike($gabriel);

$gabrielPost->addLike($lucas);


$lucas->addFollower($gabriel);
$lucas->addFollower($micaela);


$micaela->addFollower($lucas);
$micaela->addFollower($gabriel);
$micaela->addFollower($marcos);

$gabriel->addFollower($lucas);
$gabriel->addFollower($marcos);


print_r(User::showProfile($lucas));
print_r(User::showProfile($marcos));
print_r(User::showProfile($micaela));
print_r(User::showProfile($gabriel));


print_r($lucasPost->toString());
print_r($marcosPost->toString());
print_r($micaelaPost->toString());
print_r($gabrielPost->toString());







?>