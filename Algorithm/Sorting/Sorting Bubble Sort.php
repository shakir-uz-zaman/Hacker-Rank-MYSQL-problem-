<?php


function bubble_sort($bubble_numbers)
{
   // $bubble_numbers = $numbers;
    $length =count($bubble_numbers);
    $swapped = 0;
    for ($i=0;$i<$length-1;$i++)
    {
        for($j=0;$j<$length -$i-1;$j++)
            {
                if($bubble_numbers[$j] >  $bubble_numbers[$j+1] )
                {
                    $temp =  $bubble_numbers[$j+1] ;
                    $bubble_numbers[$j+1] = $bubble_numbers[$j] ;
                    $bubble_numbers[$j] =$temp;
                    $swapped++;
                }
               
            }

    }
    output($swapped,$bubble_numbers[0],$bubble_numbers[$length-1]);

}
function output($swapped_number, $first_element, $last_element)
{
   $txt ="Array is sorted in ".$swapped_number." swaps.".PHP_EOL."First Element: ".$first_element.PHP_EOL."Last Element: ".$last_element;
 echo $txt;

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

bubble_sort($a);


fclose($stdin);
