<?php



    $n = 11;
    $k = 2;



    $array = [];

    for( $i = 1; $i <= $n; $i++ ):
        $array[] = $i;
    endfor;


    


    function my_sort($array) {
        $again = true;
        while($again):
            $again = false;
            for( $i = 0; $i < count($array)-1; $i++):
                if (compare($array[$i], $array[$i+1])) {
                    $num = $array[$i];
                    $array[$i] = $array[$i+1] ;
                    $array[$i+1] = $num;
                    $again = true;
                }
            endfor;
            // print_r($array);
        endwhile;
        return $array;
    }

    function compare($a, $b)
    {
        $result = false;
        if (discharge($a) == discharge($b)) {
            return $a > $b;
        }

        if(discharge($a) > discharge($b)){
            // return (int)($a / pow(10, discharge($a)-discharge($b)));
            return cutted($a, discharge($b)) > $b;
        }

        if(discharge($a) < discharge($b)){
            return cutted($b, discharge($a)) < $a;
            // return (int)($a / pow(10, discharge($a)-discharge($b)));
            // return (int)($a / pow(10, discharge($a)-discharge($b)));
        }

        return $result;
    }

    function cutted($a, $number_of_discharges)
    {
        return (int)($a / pow(10, discharge($a) - $number_of_discharges));
    }
    

    function discharge($a){
        //return str_len($a);
        $again = true;
        $count = 0;
        while($again):
            $again = false;
            if((int)($a / 10) == 0){
            break;
            }
            (int)($a / 10);
            $count++;
            
        endwhile;
        return $count;
    }

    

    function single_digit_number($a, $b) {
        return discharge($a) == discharge($b);
    }

    function location_search($number, $array){
        $indexOf = array_search($number, $array);  
        $placeNumber = $indexOf + 1;  
        return $placeNumber;
    }

    print_r(my_sort($array)); 
    ?> 
    <hr>
    <?php
    
    print_r(location_search($k, my_sort($array)));
    // var_dump(discharge(1) == 1);
    // var_dump(discharge(10) == 2);
    // var_dump(discharge(510) == 3);

    // var_dump(cutted(100, 2) == 10);
    // var_dump(cutted(276362, 2) == 27);



    // var_dump(single_digit_number(1, 2) == true);
    // var_dump(single_digit_number(10, 2) == false);
    // var_dump(single_digit_number(1, 20) == false);

    // var_dump(my_sort([1, 2, 3, 12, 11, 10]) == [1, 10, 11, 12, 2, 3]);
    // var_dump(my_sort([1, 2, 3, 4, 10, 11]));
    // var_dump(my_sort([1, 2, 3, 12, 11, 10]));
    // var_dump(compare(1, 2) == false);
    // var_dump(compare(10, 2) == false);
    // var_dump(compare(2, 10) == true);
    // var_dump(compare(11, 10) == true);
    // var_dump(compare(3, 11) == true);
    // var_dump(compare(9, 2) == true);
    


    // var_dump(location_search(5, [1, 2, 3, 5, 10, 43]) == 4);
    // var_dump(location_search(5, [3, 5, 65, 45, 55, 64]) == 2);
    // var_dump(location_search(55, [3, 5, 65, 45, 55, 64]) == 5);

   

 
