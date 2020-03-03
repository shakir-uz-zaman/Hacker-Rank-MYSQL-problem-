<?php
$data_file_name = 'random_data.txt';
if (file_exists($data_file_name)) {

   // unlink($data_file_name);

}
//$fp = fopen($data_file_name, 'r');
//$fp = fopen($data_file_name, 'w');
//$max_loop_limit =5;
//for($i =0;$i<$max_loop_limit;$i++)
//{
//    $random_number = rand(0,50);
//
//    if($i<$max_loop_limit-1)
//    {
//        fwrite($fp, $random_number."," );
//    }
//    else
//    {
//        fwrite($fp, $random_number );
//    }
//}
//fclose($fp);

$data = file_get_contents($data_file_name);
$numbers = explode(",",$data);
//print_r($numbers);

bubble_sort($numbers);

/////////////--------  BUBBLE SORT STARTS bubblestarts ---------/////////////////////////
function bubble_sort($numbers)
{
    $bubble_numbers = $numbers;
    $length =count($bubble_numbers);
    $swapped =0;
    print_this_array($bubble_numbers);
    for ($i=0;$i<$length-1;$i++)
    {
        for($j=0;$j<$length -$i-1;$j++)
            {
                if($bubble_numbers[$j] >  $bubble_numbers[$j+1] )
                {
                    $swapped++;
                    $temp =  $bubble_numbers[$j+1] ;
                    $bubble_numbers[$j+1] = $bubble_numbers[$j] ;
                    $bubble_numbers[$j] =$temp;
                }
               //var_dump($j);
                print_this_array($bubble_numbers);
            }

    }
    echo $swapped;



//    foreac h($numbers as $number)
//    {
//        echo $number."  ";
//    }
}

function print_this_array($arr)
{
    echo "<br>";
    foreach($arr as $ass)
    {
        echo $ass." ";
    }
}


////////////////--------  BUBBLE SORT FINISH buublefinish  ---------/////////////////////////