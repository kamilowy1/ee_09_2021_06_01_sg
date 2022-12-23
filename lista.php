<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" type="text/css" href="styl.css"/>
</head>
<body>
    <div id="baner">
     <h1> Portal Społecznościowy - moje konto </h1>
    </div>

       <div id="główny">
    <h2> Moje zainteresowania</h2>
    <ul>
        <li> muzyka </li>
        <li> film </li>
        <li> komputery </li>
    </ul>
      <h2> Moi znajomi</h2>
<?php
//utworzenie zmiennych polaczeniowych
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "dane";

$conn = mysqli_connect($server,$user,$passwd,$dbname);
/*
if (!$conn){
    die ("fatal error" .mysqli_error($conn));
} echo "jest okej";
*/

$zapytanie = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN (1,2,6)";
$sql = mysqli_query($conn,$zapytanie);

while ($wynik = mysqli_fetch_row($sql)){
    echo "<div id='zdjęcie'><img src='$wynik[3]' alt='przyjaciel'></div>";
    echo "<div id='opis'> <h3> $wynik[0]  $wynik[1] </h3> <p> Ostatni wpis: $wynik[2] </p> </div>";
    echo "<div id='linia'> <hr> </div>";
}
mysqli_close($conn);
?>
       </div>

       <div id="stopka1">
        <p> Stronę wykonał: 000000000</p>
       </div>
          
         <div id="stopka2">
          <a href="ja@portal.pl">napisz do mnie</a>
         </div>

</body>
</html>