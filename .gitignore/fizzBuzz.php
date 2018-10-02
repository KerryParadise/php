
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fizz Buzz</title>
    </head>
    <body>
        
        
        <ul>   
        <?php 
        
            for ($i=1; $i<=100; $i++) {
                if ($i %2 == 0) {
                    echo "Fizz<br />";
                } 
                else if ($i %3 == 0) {
                    echo "Buzz<br />";
                } 
                else if ($i %2 == 0 && $i %3 == 0 ) {
                    echo " Fizz & Buzz<br />";
                } 
                else {
                     echo $i . "<br />";
                }
                
            }
        ?>
        </ul> 
               
        
    </body>
</html>

