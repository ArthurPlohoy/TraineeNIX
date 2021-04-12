<?php

require 'libs/rb.php';
R::setup('mysql:host=localhost;dbname=site_2', 'root', 'root');
session_start();

function showError($errors){
    return array_shift($errors);
}
