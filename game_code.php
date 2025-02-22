<?php

// Ushbu kodda birinchi binary algorithmi qo'llangan 
// Yani binary qidiruv tizimi



function game_code($number)
{


    $a = 1;
    $b= 7;
    
   $random = rand(1,100);

   
    while($number != $random)
    {
       
        if($number<$random) echo "Men o'ylagan son kattaroq \n";
        if($number>$random) echo "Men o'ylagan son kichikroq \n" ;
       
        if($a <= $b)
        { 
            echo "Sizda $b ta urinish qoldi \n";
            
        }else{

            echo "Siz qoldinigiz iltimos o'ylangan sonni topib qo'ying 😔😔😔😔😔😔  \n";
        }
        
        $number = readline("Son kiriting: ");
        if($number == $random)
        {
            echo "Tabriklayman siz yutdingiz: 😀😀😀😀😀😀😀";
        }
        $b--;

    }
   

}
$number = readline("Son kiriting: ");


game_code($number);