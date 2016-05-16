<?php

    //値を取得
    $a = $_POST['number'];
    $b = $_POST['digit'];

    if ($a > 0 && $b >= 2) {

        if (strlen($a) < $b) {

            //var_dump($a);
            //var_dump($b);

            //echo $a[0];
            // b-a 桁分の0を各配列に格納
            $num = array_fill(0, $b - strlen($a), 0);
            //print_r ($a);
            //var_dump($num);

            for ($i = 0; $i < strlen($a); $i++) {
                $num2[$i] = $a[$i];
            }

            // foreach(str_split($a) as $value){
            //     $num2 = intval($value);
            // }

            //var_dump($num2);

            $result = array_merge($num, $num2);
        } else {

            for ($i = strlen($a) - $b ; $i < strlen($a); $i++) {
                $result[$i] = $a[$i];
            }
        }

        // 出力
        echo "実行結果<br />";
        foreach($result as $value){
            print_r ($value);
        }


    } else {
        print "数値に誤りがあります。";
    }

?>
