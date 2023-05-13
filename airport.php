<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>

<body>
    <header>
        <div id="a">
            <h2>Odloty z lotniska</h2>
        </div>
        <div id='b'>
            <img src="zad6.png" alt="logotyp">
        </div>
    </header>
    <main>
        <h4>tabela odlotów</h4>
        <table>
            <tr>
                <th>Lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'egzamin');
            $q1 = mysqli_query($conn, "SELECT id,nr_rejsu,czas,kierunek,status_lotu FROM odloty ORDER BY czas DESC;");
            foreach ($q1 as $row) {
                echo "<tr>";
                foreach ($row as $r) {
                    echo "<td>" . $r . "</td>";
                }
                echo "</tr>";
            }
            mysqli_close($conn);
            ?>
        </table>
    </main>
    <footer>
        <div id="c">
            <a href="zrzuty/kw1.png" target="_blank">Pobierz obraz</a>
        </div>
        <div id="e">
            <?php
            if (isset($_COOKIE['ciastko'])) {
                echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
            } else {
                echo "<p><b>Dzień dobry! Sprawdź regulamin naszej strony</b></p>";
            }
            ?>
            <?php
            $name = "ciastko";
            $value = "1";
            setcookie($name, $value, time() + 3600);
            ?>
        </div>
        <div id="c">
            Autor: Stanisław Fiedoruk 4J
        </div>
    </footer>
</body>

</html>