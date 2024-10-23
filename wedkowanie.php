<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wedkowania</title>
</head>
<body>
    <header>
            <h2>WEDKUJ Z NAMI</h2>
    </header>
    <main>
        <div id="lewy">
            <img src="ryba2.jpg" alt="SZCZUPAK">
        </div>
        <div id="prawy">
            <h3>Ryby spokojnego żeru (białe)</h3>
            <?php
            $baza = new mysqli ('localhost','root','','baza');
                $q = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=1";
                $result = mysqli_query($baza, $q);

                while($row = mysqli_fetch_array($result)){
                    echo '<p>'.$row[0].'. '.$row[1].', występuje w: '.$row[2].'</p>';
                }
            $baza ->close();
            ?>
            <ol>
                <li>
                    <a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a>
                </li>

                <li>
                    <a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski”</a>
                </li>
            </ol>
        </div>
    </main>
    <footer>
        <p>AUTOR:JANEK</p>
    </footer>
</body>
</html>