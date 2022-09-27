<?php 

class User {
    private $email;
    private $nom;
    private $prenom;
    private $age;

    function __construct($email,$nom,$prenom,$age) {
        $this->email = $email;
        $this->nom= $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    function getEmail(){
        return $this->email;
    }

    function getnom(){
        return $this->nom;
    }
    function getprenom(){
        return $this->prenom;
    }
    function getAge(){
        return $this->age;
    }

    function isValid(){
        $errors = [];
        if(!$this->nom < 18){
            $errors = "vous avez moins de 16ans";
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $errors = "Email invalide";
        }
        if(!$this->nom){
            $errors = "Nom invalide";
        }
        if(!$this->prenom){
            $errors = "Prenom invalide";
        }
        
    }
}