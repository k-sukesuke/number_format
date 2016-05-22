<?php

    //値を取得
    $a = $_POST['number'];
    $b = $_POST['digit'];

    if (intval($a) > 0 && intval($b) >= 2) {


            //var_dump($a);
            //var_dump($b);

            //echo $a[0];
            // b-a 桁分の0を各配列に格納
            // $num = array_fill(0, $b - strlen($a), 0);
            //$result = str_pad("$a", $b, "0", STR_PAD_LEF);
            //print_r ($a);
            //var_dump($result);

            //for ($i = 0; $i < strlen($a); $i++) {
            //    $num2[$i] = $a[$i];
            //}

            // foreach(str_split($a) as $value){
            //     $num2 = intval($value);
            // }

            //var_dump($num2);

            //$result = array_merge($num, $num2);
        //} else {

            //for ($i = strlen($a) - $b ; $i < strlen($a); $i++) {
            //    $result[$i] = $a[$i];
            //}

        //var_dump($a);
        //var_dump($b);
        //var_dump(intval($b));

        // 出力
        echo "実行結果<br/>";
        echo str_pad($a, intval($b), "0", STR_PAD_LEFT);




        //foreach($result as $value){
        //    print_r ($value);
        //}


    } else {
        print "数値に誤りがあります。";
    }

?>
