<?php

         $string = "My Name is Mangilal Saini and My village name is Dhandholai";
         $searchstr = "/M/i";

         echo preg_match($searchstr, $string).'<br>';
         echo preg_match_all($searchstr, $string). '<br>';
         echo "Before Replace : $string <br>";
         echo "After Replace :" . preg_replace($searchstr, "N", $string);
?>