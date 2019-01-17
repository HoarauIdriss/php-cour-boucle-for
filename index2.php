<?php

function impair($num)
    {
        if($num % 2 != 1) // Si le nombre est impair on retourne true
    {
        return true;
    }
        return false; // Sinon on retourne false
    }
        for($i= 0; $i <= 500; $i++)
    {
        echo "<br/>";
        if(impair($i))
    {   // Si le nombre est impair on l'affiche
         echo $i;
    }
    }

?>