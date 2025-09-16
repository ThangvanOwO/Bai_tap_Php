<?php
$tong = 0;
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo "Số: $i <br>";
    $tong += $i;
}
echo "Tổng các số lẻ từ 1 đến 20 là: $tong";
?>
