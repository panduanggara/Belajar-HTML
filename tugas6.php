<?php

// membuat perkondisian bilangan ganjil dan genap 
// membuat perulangan menampilkan 100 sampai 0

$jumlahgenap = 0;
$jumlahganjil = 0;

for ($i = 1; $i <=20; $i++) {

    if ($i % 2 == 0){
        echo $i . ". adalah bilangan genap<br>";
        $jumlahgenap++;
    }else {
        echo $i . ". adalah bilangan ganjil<br>";
        $jumlahganjil++;
    }

    echo "<br>";
}

echo "jumlah angka genap : " . $jumlahgenap . "<br>";
echo "jumlah angka ganjil : " . $jumlahganjil . "<br>";
echo "<br>";
?>

<?php

echo "perulangan 100 sampai 0 : <br>";
echo "<br/>";
for ($i = 100; $i >=0; $i--){
    echo $i . "<br>";
}
?>

<?php

// 1-20 bilangan genap
// => hasilnya akan menampilkan bilangan ganjil semua
echo "bilangan genap : <br>";
for ($i = 1; $i <=20; $i++){
    if ($i % 2 == 0){
        echo $i;
    } 
} 

// 1-20 bilangan ganjil 
// => hasilnya akan menampilkan bilangan ganjil semua
echo "<br>";
echo "bilangan ganjil : <br>";
for ($i = 1; $i <=20; $i++){
    if ($i % 2 == 1){
        echo $i;
    } 
}  
?>  