<?php

require_once("./classes/user.php;");

$utilisateur = new User("JeanFile@gmail.com", "File", "Jean", 27);
var_dump($utilisateur->isValid());

$utilisateur2 = new User("LucArne.gmail.com", "Arne", "Luc", 17);
var_dump($utilisateur2->isValid());

$utilisateur3 = new User("JackCoste.com", "", "Jack", 17);
var_dump($utilisateur2->isValid());

$utilisateur4 = new User("JackCoste.com", "Coste", "", 18);
var_dump($utilisateur2->isValid());