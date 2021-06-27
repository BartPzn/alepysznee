<?php
 
// Wczytanie liczb z formularza
$liczba1 = $_GET['liczba1'];
 
// Zapisanie liczb do pliku
 
$poprzednie_wpisy = file_get_contents('plik.txt');
$nowy_wpis=$poprzednie_wpisy.PHP_EOL.$liczba1;
if(file_put_contents('plik.txt', $nowy_wpis)!==false)
{
    echo'Dziękuje za ocenę: ';
}



 
//$plik = fopen("plik.txt","w");
//fputs($plik,$liczba1.PHP_EOL);
 
//fclose($plik);
 
// Obliczanie średniej na podstawie liczb z pliku
$srednia = 0;
 
$plik = fopen("plik.txt","r");
while (!feof($plik)) {
    $srednia = $srednia + (intval(fgets($plik,1024)));
}
fclose($plik);
 
echo $srednia/2; 
?>
 
<?php
 
// Wczytanie liczb z formularza
$liczba2 = $_GET['liczba2'];
 
// Zapisanie liczb do pliku
 
$poprzednie_wpisy = file_get_contents('plik1.txt');
$nowy_wpis=$poprzednie_wpisy.PHP_EOL.$liczba2;
if(file_put_contents('plik1.txt', $nowy_wpis)!==false)
{
    echo'Dziękuje za ocenę: ';
}



 
//$plik = fopen("plik.txt","w");
//fputs($plik,$liczba1.PHP_EOL);
 
//fclose($plik);
 
// Obliczanie średniej na podstawie liczb z pliku
$srednia = 0;
 
$plik = fopen("plik1.txt","r");
while (!feof($plik)) {
    $srednia = $srednia + (intval(fgets($plik,1024)));
}
fclose($plik);
 
echo $srednia/2; 
?>
 
<?php
 
// Wczytanie liczb z formularza
$liczba3 = $_GET['liczba3'];
 
// Zapisanie liczb do pliku
 
$poprzednie_wpisy = file_get_contents('plik2.txt');
$nowy_wpis=$poprzednie_wpisy.PHP_EOL.$liczba3;
if(file_put_contents('plik2.txt', $nowy_wpis)!==false)
{
    echo'Dziękuje za ocenę: ';
}



 
//$plik = fopen("plik.txt","w");
//fputs($plik,$liczba1.PHP_EOL);
 
//fclose($plik);
 
// Obliczanie średniej na podstawie liczb z pliku
$srednia = 0;
 
$plik = fopen("plik2.txt","r");
while (!feof($plik)) {
    $srednia = $srednia + (intval(fgets($plik,1024)));
}
fclose($plik);
 
echo $srednia/2; 
?>