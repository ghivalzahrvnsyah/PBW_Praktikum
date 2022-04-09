<?php 
    echo "Substring function";
   $string = "D3 Rekayasa Perangkat Lunak Aplikasi";
    echo "<br>".substr($string, 3);
    echo "<br>".substr($string, -8);
    echo "<br>".substr($string, 3,24);
    echo "<br>".substr($string, 11, 16);

    echo "<br><br>";

    echo "str_replace Function <br>";
    $string = array('Saya adalah Abdullah', 
                    'Saya punya seekor kucing yang sangat lucu',
                    'Setiap hari ku ajak dia bermain'
                    );

    $search = array('Abdullah', 'kucing','lucu', 'bermain');
    $replace = array('Abdurrahman', 'bebek', 'gemuk', 'berenang');

    $replacedWord = str_replace($search, $replace, $string);
    foreach($replacedWord as $key => $value){
        echo "$value <br>";

    }

    echo "<br><br>";

    echo "Hash Fuction";
    $password = 'My password';
    $user = 'Administrator';
    echo "<br>".sprintf("md5 : %s\n", md5($password, $user));
    echo "<br>".sprintf("sha1 : %s\n", sha1($password, $user));
    echo "<br>".sprintf("hash : %s\n", hash('gost', $password.$user));

    echo "<br><br>";

    echo "Bilangan Prima <br>";

    $counter = 0;
    for ($i=0; $i <= 100 ; $i++) {     // for 1, adalah bilangan yang akan di cek
        $t = 0;
       
        for ($j=1; $j <= $i ; $j++) {  // for 2, pengecekan bilangan pembagi
            if ($i % $j == 0) {
                $t++;
            }
        }
       
        if ($t == 2) {   // syarat atau kondisi bilangan prima
            echo $i, ',';
            $counter++;
        }
    }
    echo '<br>jumlah bilangan prima '.$counter.' buah'; 
?>