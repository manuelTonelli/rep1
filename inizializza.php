<?php
    session_start();
    $tempArray = array(
        array("empty", "empty"),
        array("empty", "empty"),
        array("empty", "empty"),
        array("empty", "empty")
    );
    $_SESSION["nickname"]=$_REQUEST["username"];
    $_SESSION["images"]=array(
        array("img", "img"),
        array("img", "img"),
        array("img", "img"),
        array("img", "img")
    );
    for($i = 0; $i < 4; $i++)
    {
        for($j=0; $j<2; $j++)
        {
            $empty = false;
            while(!$empty)
            {
                $x2 = rand(0, 1);
                $x = rand(0, 3);
                if($tempArray[$x][$x2] == "empty")
                {
                   $empty = true;
                   $tempArray[$x][$x2] = "full";
                   $_SESSION["images"][$x][$x2] = "img".($i+1).".png";
                }
            }
        }
    }
    require("giocaMemory.php");		
?>