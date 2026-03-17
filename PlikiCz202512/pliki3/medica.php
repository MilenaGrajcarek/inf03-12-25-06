<!DOCTYPE html>
<html lang="pl">
    <?php
        $db = mysqli_connect("localhost","root","","medica");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Medica</title>
    <link rel="icon" href="obraz2.png">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>
    <article>
        <?php
            $query1 = "SELECT abonamenty.nazwa, abonamenty.cena, abonamenty.opis FROM abonamenty;";
            $result = mysqli_query($db,$query1);
            while($row = mysqli_fetch_array($result)){
                echo "<h3>Pakiet $row[0] - cena $row[1] zł</h3>";
                echo "<p>$row[2]</p>";
            }
        ?>
        <a href="opis.html">Dowiedz się więcej</a>
    </article>
    <main>
        <section>
            <h2>Standardowy</h2>
            <ul>
                <?php
                    $query3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 1;";
                    $result = mysqli_query($db,$query3);
                    while($row = mysqli_fetch_array($result)){
                        echo "<li>$row[1]</li>";
                    }
                ?>
            </ul>
        </section>
        <section>
            <h2>Premium</h2>
            <ul>
                <?php
                    $query3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 2;";
                    $result = mysqli_query($db,$query3);
                    while($row = mysqli_fetch_array($result)){
                        echo "<li>$row[1]</li>";
                    }
                ?>
            </ul>
        </section>
        <section>
            <h2>Dziecko</h2>
            <ul>
                <?php
                    $query3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 3;";
                    $result = mysqli_query($db,$query3);
                    while($row = mysqli_fetch_array($result)){
                        echo "<li>$row[1]</li>";
                    }
                ?>
            </ul>           
        </section>
    </main>
    <footer>
        <p><img src="obraz2.png" alt="przychodnia">Stronę przygotował: 12345678</p>
    </footer>
</body>
<?php
    mysqli_close($db);
?>
</html>