<html lang="pl">
<head>
    <meta charset="UTF-8">
        <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1> Portal społecznościowy-moje konto</h1>
    </div>

    <div class="glowny">
        <h2> Moje zainteresowania </h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'dane');
            $zapytanie = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN (1,2,6)";
            
            $wynik = mysqli_query($polaczenie, $zapytanie);
            while($wiersz = mysqli_fetch_array($wynik)){
                echo "<div class='zdjecie'><img src='$wiersz[3]' alt='przyjaciel'></div>";
                echo "<div class='opis'>
                        <h3>$wiersz[0] $wiersz[1]</h3>
                        <p>Ostatni wpis: $wiersz[2]</p>
                        </div>";
                echo "<div class='linia'><hr></div>";
            }
            mysqli_close($polaczenie);
        ?>
    </div>
    <div class="stopka1">
        Stronę wykonał: 00000
    </div>
    <div class="stopka2">
        <a href="ja@portal.pl">napisz do mnie</a>
    </div>
</body>
</html>