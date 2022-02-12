<?php
// operator aritmetika
$a=10;
$b=3;
echo "{$a} + {$b} = ".($a+$b)." <br>"; 
echo "{$a} - {$b} =" .($a- $b)."<br>";
echo "{$a} * {$b}=" .($a * $b)."<br>";
echo "{$a} / {$b}=" .($a / $b)."<br>";

// perbandingan equsal dan identik 
var_dump (3 =="3"); // perbandingan equasal
echo "<br>";
var_dump (3 ==="3"); // perbandingan identik
echo "<br>";
var_dump(3!="3");// tidak sama dengan perbandingan equasal
echo "<br>";
var_dump(3 !== "3"); // tidak sama dengan perbandingan identik
echo "<br>";
var_dump(10 <> "10"); // prbandingan yang sama dengan tidak !=
echo "<br>";
// perbedaan dari perbandingan equasal dan indentik 
//perbandingan equasal adalah perbandingan yang tidak memperdulikan tipe data sehingga ia mengaggap 
// 10 = "10" sama sedangkan perbandingan identik sebaliknya yaitu memperdukikan tipe data sehingga 
// dua nilai akan di katakan sama jika dari sisi nilai dan tipe datanya.

