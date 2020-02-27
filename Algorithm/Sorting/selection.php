<?php
$data_file_name = 'random_data.txt';
$data = file_get_contents($data_file_name);
$numbers = explode(",",$data);
//print_r($numbers);

//bubble_sort($numbers);
selection_sort($numbers);
/////////////--------  BUBBLE SORT STARTS bubblestarts ---------/////////////////////////
function bubble_sort($numbers)
{
    $bubble_numbers = $numbers;
    $length =count($bubble_numbers);
    print_this_array($bubble_numbers);
    for ($i=0;$i<$length-1;$i++)
    {
        for($j=0;$j<$length -$i-1;$j++)
            {
                if($bubble_numbers[$j] >  $bubble_numbers[$j+1] )
                {
                    $temp =  $bubble_numbers[$j+1] ;
                    $bubble_numbers[$j+1] = $bubble_numbers[$j] ;
                    $bubble_numbers[$j] =$temp;
                }
               //var_dump($j);
                print_this_array($bubble_numbers);
            }

    }

}
function selection_sort($numbers)
{
    $selection_numbers = $numbers;
    $length = count($selection_numbers);
    print_this_array($selection_numbers);


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