<?php
echo "<br><br><table border='1' cellpadding='10' cellspacing='0'>";
echo "Angka genap dari 1 sampai 10:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

// Baris header (kolom angka 1–10)
echo "<tr style='background-color:green; color:white;'><th>bilangan</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Isi tabel perkalian
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    // Kolom pertama (bilangan baris)
    echo "<th style='background-color:green; color:white;'>$i</th>";

    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;

        // Warna sesuai genap/ganjil
        $bgcolor = ($result % 2 == 0) ? "orange" : "purple";

        echo "<td style='background-color:$bgcolor; text-align:center; color:white;'>$result</td>";
    }

    echo "</tr>";
}
echo "</table>";
?>