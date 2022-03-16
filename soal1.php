<?php

$jml = $_GET['jml'];

echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--) {
    echo "<tr>\n";

    $count = 0;
    for ($b = $a; $b > 0; $b--) {
        $count += $b;
    }

    echo "<tr><td colspan=4>TOTAL: $count</td></tr>";
    for ($c = $a; $c > 0; $c--) {
        echo "<td>$c</td>";
    }
    echo "</tr>\n";
}
echo "</table>";
