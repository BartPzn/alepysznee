<html>
 <head>
  <title>
   Wyniki
  </title>
 </head>

 <body>
 

  Zamówienie: <?php switch($_GET['nazwa']){
   case "wartość1":
     echo "Schab z kością";
     echo "   ";
     echo"Do zapłaty 37 PLN ";
     break;
   case "wartość2":
     echo "Stek z polędwicy wołowej";
     echo "   ";
     echo"Do zapłaty 89 PLN ";
     break;
   case "wartość3":
     echo "Połówka kaczki pieczona z jabłkami";
     echo "   ";
     echo"Do zapłaty 85 PLN ";
     break;
   }
?>
 </body>
</html>