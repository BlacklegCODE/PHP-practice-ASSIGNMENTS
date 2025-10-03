<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
        echo "Harsh";
        
        $a = 5;
        $b = 6.6;
        echo $a + $b;
        
        $bro = "This is a string";
        var_dump($bro);
        var_dump($a);
        var_dump($b);
        */
        
        /*
        $fruits = array('apple','bro','doctor');
        var_dump($fruits);
        
        $var1 = null;
        */
        
//        $str1 = "The two time back to back harsh";
//        echo strlen($str1),"<br>";
//        echo str_word_count($str1),"<br>";
//        echo strrev($str1),"<br>";
//        echo strpos($str1, 'is'),"<br>";
//        echo str_replace('time', 'bro', $str1),"<br>";
//        echo $str1;    
        
        
//        define("PI", 3.14);
//        echo PI,"<br>";
//        
//        #Operators :
//        
//        echo "Value of 3 + 4 is : ",3+4,"<br>";
//        echo "Value of 3 - 4 is : ",3-4,"<br>";
//        echo "Value of 3 * 4 is : ",3*4,"<br>";
//        echo "Value of 3 ** 4 is : ",3**4,"<br>";
//        echo "Value of 3 / 4 is : ",3/4,"<br>";
//        echo "Value of 3 % 4 is : ",3%4,"<br>";
//        $x = 4;
//        echo $x,"<br>";
//        $x = $x + 1;
//        $x++;
//        echo $x,"<br>";
//        $x--;
//        echo $x;
//        
        
//        $t = date("H");
//        
//        if($t <"30")
//        {
//            echo $t . " is a good time","<br>";
//        }
//        elseif ($t == 10) {
//            echo "Time is 10";
//        }
//        else
//        {
//            echo "Bad luck";
//        }
//        
    
        while loop
        $var2 = 1;
        while( $var2 <= 4)
        {
            if($var2 == 3)
            {
                $var2++;
                continue;
            }
            echo "The current value of var is ". $var2."<br>";
            $var2 ++;
        }
        echo "next style ","<br>";
        $var3 = 1;
        while($var3 < 10)
        {
            if($var3 == 5)
            {
                $var3 ++;
                break;
            }
            echo "Number :". $var3 . "<br>";
            $var3 ++;
        }
        
        for($i = 0; $i<5;$i++)
        {
            echo 'current :'.$i."<br>";
        }
        ?>
        
    </body>
</html>
