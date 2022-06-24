
<?php
 $basamak=7;

 $sayilar=array();
 

 $engeller = array(
    1=>array(2,4,5),
    2=>array(5),
    3=>array(2,5,6),
    4=>array(5),
    5=>array(),
    6=>array(5),
    7=>array(4,5,8),
    8=>array(5),
    9=>array(5,6,8)
);

$gidilemeyenler= array(
1=>array(3,7,9),
2=>array(8),
3=>array(1,7,9),
4=>array(6),
5=>array(),
6=>array(4),
7=>array(1,3,9),
8=>array(2),
9=>array(1,3,7)
);

switch($basamak){
    case 4:
        $i=1000;
        $s=9999;
        break;
    case 5:
        $i=10000;
        $s=99999;
        break;
    case 6:
        $i=100000;
        $s=999999;
        break;
    case 7:
        $i=1000000;
        $s=9999999;
        break;
    case 8:
        $i=10000000;
        $s=99999999;
        break;
    case 9:
        $i=100000000;
        $s=999999999;
        break;
}

for($i;$i<=$s;$i++){
    $sayi=array();
    $a=str_split($i,1); // rakamlar sıralı dizide atıldı
    if(count(array_unique($a)) != $basamak){ // tekrarlı sayılar vardsa atlandı
        continue;
    }else{
        if (($key = array_search(0, $a)) !== false) { // sıfırlar kontrolü
            unset($a[$key]);// sıfırlar çıkarıldı
            continue;
        }else{
           foreach ($a as $v) {
                if(count($sayi) == 0 && count($sayi) < $basamak){
                    array_push($sayi,$v);
                }elseif(count($sayi) == 1 && count($sayi) < $basamak){
                    $last=array_key_last($sayi);
                    $dizisondeger=$sayi[$last];
                    if(!in_array($v,$gidilemeyenler[$dizisondeger])){
                        array_push($sayi,$v);
                        continue;
                    }else{
                        if($v == 1){
                            if(in_array($dizisondeger,array(3,7,9))){
                                if($dizisondeger == 3 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 2){
                            if($dizisondeger == 8 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 8 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 8){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 3){
                            if(in_array($dizisondeger,array(1,7,9))){
                                if($dizisondeger == 1 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 4){
                            if($dizisondeger == 6 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 6 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 6){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 5){
                            array_push($sayi,$v);
                            continue;
                        }elseif($v == 6){
                            if($dizisondeger == 4 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 4 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 4){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 7){
                            if(in_array($dizisondeger,array(1,3,9))){
                                if($dizisondeger == 1 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 8){
                            if($dizisondeger == 2 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 2 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 2){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 9){
                            if(in_array($dizisondeger,array(1,3,7))){
                                if($dizisondeger == 1 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }
                    }
                }elseif(count($sayi) == 2 && count($sayi) < $basamak){
                    $last=array_key_last($sayi);
                    $dizisondeger=$sayi[$last];
                    if(!in_array($v,$gidilemeyenler[$dizisondeger])){
                        array_push($sayi,$v);
                        continue;
                    }else{
                        if($v == 1){
                            if(in_array($dizisondeger,array(3,7,9))){
                                if($dizisondeger == 3 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 2){
                            if($dizisondeger == 8 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 8 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 8){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 3){
                            if(in_array($dizisondeger,array(1,7,9))){
                                if($dizisondeger == 1 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 4){
                            if($dizisondeger == 6 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 6 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 6){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 5){
                            array_push($sayi,$v);
                            continue;
                        }elseif($v == 6){
                            if($dizisondeger == 4 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 4 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 4){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 7){
                            if(in_array($dizisondeger,array(1,3,9))){
                                if($dizisondeger == 1 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 8){
                            if($dizisondeger == 2 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 2 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 2){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 9){
                            if(in_array($dizisondeger,array(1,3,7))){
                                if($dizisondeger == 1 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }
                    }
                }elseif(count($sayi) == 3 && count($sayi) < $basamak){
                    $last=array_key_last($sayi);
                    $dizisondeger=$sayi[$last];
                    if(!in_array($v,$gidilemeyenler[$dizisondeger])){
                        array_push($sayi,$v);
                        continue;
                    }else{
                        if($v == 1){
                            if(in_array($dizisondeger,array(3,7,9))){
                                if($dizisondeger == 3 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 2){
                            if($dizisondeger == 8 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 8 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 8){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 3){
                            if(in_array($dizisondeger,array(1,7,9))){
                                if($dizisondeger == 1 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 4){
                            if($dizisondeger == 6 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 6 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 6){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 5){
                            array_push($sayi,$v);
                            continue;
                        }elseif($v == 6){
                            if($dizisondeger == 4 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 4 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 4){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 7){
                            if(in_array($dizisondeger,array(1,3,9))){
                                if($dizisondeger == 1 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 8){
                            if($dizisondeger == 2 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 2 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 2){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 9){
                            if(in_array($dizisondeger,array(1,3,7))){
                                if($dizisondeger == 1 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }
                    }
                }elseif(count($sayi) == 4 && count($sayi) < $basamak){
                    $last=array_key_last($sayi);
                    $dizisondeger=$sayi[$last];
                    if(!in_array($v,$gidilemeyenler[$dizisondeger])){
                        array_push($sayi,$v);
                        continue;
                    }else{
                        if($v == 1){
                            if(in_array($dizisondeger,array(3,7,9))){
                                if($dizisondeger == 3 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 2){
                            if($dizisondeger == 8 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 8 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 8){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 3){
                            if(in_array($dizisondeger,array(1,7,9))){
                                if($dizisondeger == 1 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 4){
                            if($dizisondeger == 6 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 6 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 6){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 5){
                            array_push($sayi,$v);
                            continue;
                        }elseif($v == 6){
                            if($dizisondeger == 4 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 4 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 4){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 7){
                            if(in_array($dizisondeger,array(1,3,9))){
                                if($dizisondeger == 1 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 8){
                            if($dizisondeger == 2 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 2 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 2){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 9){
                            if(in_array($dizisondeger,array(1,3,7))){
                                if($dizisondeger == 1 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }
                    }
                }elseif(count($sayi) == 5 && count($sayi) < $basamak){
                    $last=array_key_last($sayi);
                    $dizisondeger=$sayi[$last];
                    if(!in_array($v,$gidilemeyenler[$dizisondeger])){
                        array_push($sayi,$v);
                        continue;
                    }else{
                        if($v == 1){
                            if(in_array($dizisondeger,array(3,7,9))){
                                if($dizisondeger == 3 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 2){
                            if($dizisondeger == 8 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 8 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 8){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 3){
                            if(in_array($dizisondeger,array(1,7,9))){
                                if($dizisondeger == 1 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 4){
                            if($dizisondeger == 6 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 6 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 6){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 5){
                            array_push($sayi,$v);
                            continue;
                        }elseif($v == 6){
                            if($dizisondeger == 4 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 4 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 4){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 7){
                            if(in_array($dizisondeger,array(1,3,9))){
                                if($dizisondeger == 1 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 8){
                            if($dizisondeger == 2 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 2 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 2){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 9){
                            if(in_array($dizisondeger,array(1,3,7))){
                                if($dizisondeger == 1 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }
                    }
                }elseif(count($sayi) == 6 && count($sayi) < $basamak){
                    $last=array_key_last($sayi);
                    $dizisondeger=$sayi[$last];
                    if(!in_array($v,$gidilemeyenler[$dizisondeger])){
                        array_push($sayi,$v);
                        continue;
                    }else{
                        if($v == 1){
                            if(in_array($dizisondeger,array(3,7,9))){
                                if($dizisondeger == 3 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 2){
                            if($dizisondeger == 8 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 8 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 8){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 3){
                            if(in_array($dizisondeger,array(1,7,9))){
                                if($dizisondeger == 1 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 4){
                            if($dizisondeger == 6 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 6 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 6){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 5){
                            array_push($sayi,$v);
                            continue;
                        }elseif($v == 6){
                            if($dizisondeger == 4 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 4 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 4){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 7){
                            if(in_array($dizisondeger,array(1,3,9))){
                                if($dizisondeger == 1 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 8){
                            if($dizisondeger == 2 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 2 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 2){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 9){
                            if(in_array($dizisondeger,array(1,3,7))){
                                if($dizisondeger == 1 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }
                    }
                }elseif(count($sayi) == 7 && count($sayi) < $basamak){
                    $last=array_key_last($sayi);
                    $dizisondeger=$sayi[$last];
                    if(!in_array($v,$gidilemeyenler[$dizisondeger])){
                        array_push($sayi,$v);
                        continue;
                    }else{
                        if($v == 1){
                            if(in_array($dizisondeger,array(3,7,9))){
                                if($dizisondeger == 3 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 2){
                            if($dizisondeger == 8 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 8 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 8){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 3){
                            if(in_array($dizisondeger,array(1,7,9))){
                                if($dizisondeger == 1 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 4){
                            if($dizisondeger == 6 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 6 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 6){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 5){
                            array_push($sayi,$v);
                            continue;
                        }elseif($v == 6){
                            if($dizisondeger == 4 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 4 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 4){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 7){
                            if(in_array($dizisondeger,array(1,3,9))){
                                if($dizisondeger == 1 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 8){
                            if($dizisondeger == 2 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 2 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 2){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 9){
                            if(in_array($dizisondeger,array(1,3,7))){
                                if($dizisondeger == 1 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }
                    }
                }elseif(count($sayi) == 8 && count($sayi) < $basamak){
                    $last=array_key_last($sayi);
                    $dizisondeger=$sayi[$last];
                    if(!in_array($v,$gidilemeyenler[$dizisondeger])){
                        array_push($sayi,$v);
                        continue;
                    }else{
                        if($v == 1){
                            if(in_array($dizisondeger,array(3,7,9))){
                                if($dizisondeger == 3 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 2){
                            if($dizisondeger == 8 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 8 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 8){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 3){
                            if(in_array($dizisondeger,array(1,7,9))){
                                if($dizisondeger == 1 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 4){
                            if($dizisondeger == 6 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 6 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 6){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 5){
                            array_push($sayi,$v);
                            continue;
                        }elseif($v == 6){
                            if($dizisondeger == 4 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 4 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 4){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 7){
                            if(in_array($dizisondeger,array(1,3,9))){
                                if($dizisondeger == 1 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 8){
                            if($dizisondeger == 2 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 2 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 2){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 9){
                            if(in_array($dizisondeger,array(1,3,7))){
                                if($dizisondeger == 1 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }
                    }
                }elseif(count($sayi) == 9 && count($sayi) < $basamak){
                    $last=array_key_last($sayi);
                    $dizisondeger=$sayi[$last];
                    if(!in_array($v,$gidilemeyenler[$dizisondeger])){
                        array_push($sayi,$v);
                        continue;
                    }else{
                        if($v == 1){
                            if(in_array($dizisondeger,array(3,7,9))){
                                if($dizisondeger == 3 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 2){
                            if($dizisondeger == 8 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 8 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 8){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 3){
                            if(in_array($dizisondeger,array(1,7,9))){
                                if($dizisondeger == 1 && in_array(2,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 4){
                            if($dizisondeger == 6 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 6 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 6){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 5){
                            array_push($sayi,$v);
                            continue;
                        }elseif($v == 6){
                            if($dizisondeger == 4 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 4 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 4){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 7){
                            if(in_array($dizisondeger,array(1,3,9))){
                                if($dizisondeger == 1 && in_array(4,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 9 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 8){
                            if($dizisondeger == 2 && in_array(5,$sayi)){
                                array_push($sayi,$v);
                                continue;
                            }elseif($dizisondeger == 2 && !in_array(5,$sayi)){
                                continue;
                            }elseif($dizisondeger != 2){
                                array_push($sayi,$v);
                                continue;
                            }
                        }elseif($v == 9){
                            if(in_array($dizisondeger,array(1,3,7))){
                                if($dizisondeger == 1 && in_array(5,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 3 && in_array(6,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }elseif($dizisondeger == 7 && in_array(8,$sayi)){
                                    array_push($sayi,$v);
                                    continue;
                                }
                            }else{
                                array_push($sayi,$v);
                                continue;
                            }
                        }
                    }
                }
            }  
            if(count($sayi) === $basamak){
                array_push($sayilar,$sayi);
            }else{
                continue;
            }
            
        }
    }
    
}




$sirali=array();
foreach ($sayilar as $value) {
    $sayi="";
   foreach ($value as $v) {
      $sayi.=$v;
   }
   array_push($sirali,$sayi);
}
echo "<pre>";
print_r($sayilar);
echo "</pre>";

$fp = fopen($basamak.'_Basamaklı.txt',"w");
foreach ($sirali as $line) {
$line.="\r\n";
$blah = fwrite($fp,$line);
}
fclose($fp);




?>
