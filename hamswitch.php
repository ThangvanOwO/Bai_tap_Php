<?php
$diem = 7;

switch ($diem) {
    case 10:
        echo "Xuất sắc!";
        break;

    case 9:
    case 8:
        echo "Giỏi!";
        break;

    case 7:
    case 6:
        echo "Khá!";
        break;

    case 5:
        echo "Trung bình!";
        break;

    default:
        echo "Yếu!";
}
?>
