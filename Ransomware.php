<?php

class Ransomware {

public function criptografar($text) {
    return openssl_encrypt($text, $this -> usuario, $this -> senha);
    }

public function descriptografar($hash) {
    $array_Hash = explode(" ", $hash);
    return openssl_decrypt($array_Hash[0], $this -> usuario, $this -> senha);
    }

public function __construct() {
    $this -> usuario;
    $this -> senha;
    }

public function setPassword($senha) {
    $this -> senha = $senha;
    }
}

?>