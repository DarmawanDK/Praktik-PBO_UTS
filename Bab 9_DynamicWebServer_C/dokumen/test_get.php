<?php 

/*php -r '
>> parse_str(\"nama=darmawan&alamat=ngawi\", $_GET);
>> include \"test_get.php\";
>> '*/

    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    
    echo "<h1>Nama anda : $nama</h1>\n";
    echo "<p>Alamat anda : $alamat</p>\n";
?>
