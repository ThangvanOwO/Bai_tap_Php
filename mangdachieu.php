<?php
$raucu = array(
    "cà rốt" => array(
        "giá" => 36000,
        "xuất xứ" => "Đà Lạt",
        "tồn kho" => 50
    ),
    "bắp cải" => array(
        "giá" => 36360, 
        "xuất xứ" => "Thanh Hóa",
        "tồn kho" => 36
    )
);
echo "Giá cà rốt: " . $raucu["cà rốt"]["giá"] . " VND<br>";
echo "Xuất xứ bắp cải: " . $raucu["bắp cải"]["xuất xứ"];
?>