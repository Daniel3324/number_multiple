<?php

    $start=$_REQUEST["start"];
    $end=$_REQUEST["end"];

    $rule_1_1=FALSE;
    $rule_1_2=FALSE;
    $rule_2_1=FALSE;
    $rule_2_2=FALSE;
    $rule_3=FALSE;
    
    
    for($i=$start;$i<=$end;$i++){
        
        if(strpos($i, '3') !== false){
            $rule_1_1=TRUE;
        }
        
        if(multiplo(3,$i)){
            $rule_1_2=TRUE;
        }
        
        if(strpos($i, '5') !== false){
            $rule_2_1=TRUE;
        }
        
        if(multiplo(5,$i)){
            $rule_2_2=TRUE;
        }
        
        if(multiplo(3,$i) && multiplo(5,$i)){
            $rule_3=TRUE;
        }
        
        if((($rule_1_1)||($rule_1_2))&&(($rule_2_1)||($rule_2_2))&&($rule_3)){
            echo 'lucky';
        }else if($rule_3){
            echo 'fizzbuzz';
        }else if(($rule_1_1) &&($rule_1_2)){
            echo 'fizz fizz';
        }else if(($rule_1_1) || ($rule_1_2)){
            echo 'fizz';
        }else if(($rule_2_1) && ($rule_2_2)){
            echo 'buzz buzz';
        }else if(($rule_2_1) || ($rule_2_2)){
            echo 'buzz';
        }else{
            echo $i;
        }
        echo ",";   
         
        $rule_1_1=FALSE;
        $rule_1_2=FALSE;
        $rule_2_1=FALSE;
        $rule_2_2=FALSE;
        $rule_3=FALSE;
    }

    function multiplo($multi,$num)
    {
        if($num%$multi==0){
            return true;
        }else{
            return false;
        }
                
    }
