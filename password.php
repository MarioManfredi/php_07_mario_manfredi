<?php

require('index.php');

do{
    $password = readline('Inserisci la password: ');

}while( !checkPassw($password));