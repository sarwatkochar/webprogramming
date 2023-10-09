<html>
     <body>
            <?php
               $txt = 'Hello World'; 
                $x = 5; 
                $y = 10.5; 

                $x = 5; 
                function mytest () {
                 $y - 5 ; 
                 echo "<p> Varaible y inside function is : $y </p>";
                 echo "<p> Varaible x inside function is : $x </p>";

                }
                 mytest();
                 echo "<p> Varaible x outside function is : $x </p>";
                 echo "<p> Varaible y outside function is : $y </p>";

                              
               $x = 10;  
               $y = 6;

               echo $x + $y;


               $a = (false && foo());
               $b = (true  || foo());
               $c = (false and foo());
               $d = (true  or  foo());

               $e = false || true;
               $f = false or true;

               var_dump($e, $f);

               $g = true && false;


               $h = true and false;

               var_dump($g, $h);
                ?>  
                    






     </body>

</html>