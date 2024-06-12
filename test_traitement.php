<?php
$name= $_POST['name'];
if(strlen($name)!= 9){
    echo'<script> alert("veillez entrer une longueur de numero telephonique valide");
    window.location.href = "./Views/pre_registration_form.html";
    </script>';  
    exit;
}

if(isset($_POST['training_check'])) {
    $training_check_all = $_POST['training_check'];
    $regist_select="";
    foreach($training_check_all as $training) {
        $regist_select=$regist_select." / ".$training;
        
    }
    echo " " . $regist_select . "<br>";
} else {
    echo "Aucune formation sélectionnée.";
}
?>
