
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Tableau Exercice 8</p>
<?php
    $tab=array("Camara"=>array("Pape Sidy","Louga",27),"Ndiaye"=>array("Mbaye Ndoumbe","Kaolack",35),"Goudiaby"=>array("Djiby","Dakar",45));
    foreach($tab as $cle=>$valeur)
    {
    echo " Elément $cle : ";
    foreach($valeur as $der=>$val)
    {
    echo "elément $der : ", $val,  "  " ; }
    }
    ?>
    <br> <br> <br> <br>
 <p>Tableau Exercice 9 </p>
    <?php
    $tab=array("Camara"=>array("prenom"=>"Pape Sidy","ville"=>"Louga","age"=>27),"Ndiaye"=>array("prenom"=>"Mbaye Ndoumbe","ville"=>"Kaolack","age"=>35),
    "Goudiaby"=>array("prenom"=>"Djiby","ville"=>"Dakar","age"=>45));
    foreach ($tab as $cle=>$valeur) {
        echo " $cle : " ; 
        foreach ($valeur as $cle2=>$val) {
            echo " $cle2 :" , $val , " " ; 
        }
    }
    ?>

</body>
</html>