<?php
  $marks = array(
    "mohammad"=>array(
       "physics" =>35,
       "maths" =>30,
       "chemistry" =>39
    ),

    "qadir" => array (
        "physisc" => 30,
        "maths" => 32,
        "chemistry" =>29
    ),

    "zara"=>array(
        "physics" =>31,
       "maths" =>22,
       "chemistry" =>39
    )
    );
    echo "Mark for mohammad in physics:";
    echo $marks['mohammad']['physics']."<br/>";

    echo "Mark for qadir in maths:";
    echo $marks['qadir']['maths']."<br/>";

    echo "Mark for zara in chemistry:";
    echo $marks['zara']['chemistry']."<br/>";

?>