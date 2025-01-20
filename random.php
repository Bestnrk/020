<?php
// กำหนดช่วงที่ต้องการสุ่ม เช่น 1 - 100
$min = 1;
$max = 100;

// ใช้ rand() หรือ mt_rand() เพื่อสุ่มเลข
$randomNumber = rand($min, $max);

// แสดงผลลัพธ์
echo "เลขที่สุ่มได้: " . $randomNumber;
?>
