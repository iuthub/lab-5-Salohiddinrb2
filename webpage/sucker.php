<?php
$nameErr = $creditErr = $selectSectionErr = "";
$name = $credit = "";
$selectSection = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  
    
    if (empty($_POST["name"])) {
        $nameErr = "Name is missing";
    }
    else {
        $name = $_POST["name"];
    }

    
    
    
    
    

    if (empty($_POST["selectSection"])) {
        $selectSectiontErr = "You must select section";
    }
    else {
        $selectSection = $_POST["selectSection"];
    }
    
    
    
    
    
     if (!isset($_POST["credit"])) {
        $creditErr = "You must select credit type";
    }
    else {
        $credit = $_POST["credit"];
    }

} 
