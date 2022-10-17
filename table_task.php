<?php

$test=[
    1=>['this'=>'0k'],
    2=>['that'=> '0k'],
    3=>['those' =>'0k']
];


$sub  = 'Data Structure';
$sub1 = 'Data Mining';
$sub2 = 'Data Base';
$sub3 = 'Design Patterns';


$data = [
    1 =>[
        'name'  =>'Ahmed',
        $sub  => 88,
        $sub1 => 70,
        $sub2 => 85,
        $sub3 => 90


    ],
    2 =>[
        'name' =>'Hossam',
        $sub   => 90,
        $sub1  => 85,
        $sub2  => 66,
        $sub3  => 80


    ],
    3 =>[
        'name' =>'seif',
        $sub   => 75 ,
        $sub1  => 66,
        $sub2  => 77,
        $sub3  => 88


    ],
    4 =>[
        'name' =>'khaled',
        $sub   => 77,
        $sub1  => 55,
        $sub2  => 66,
        $sub3  => 90


    ],
    5 =>[
        'name' =>'Naser',
        $sub   => 66,
        $sub1  => 57,
        $sub2  => 88,
        $sub3  => 75


    ],
   
];


echo '<h1>the Test</h1><br> '.$test[1]['this'];

// echo '<pre>';

// print_r($data);

// echo '</pre>';

echo '<br><br>';

$TableHead = <<< END
<table border="1" width="800">
<tr>
    <th> ID    </th>
    <th> name  </th>
    <th> $sub  </th>
    <th> $sub1 </th>
    <th> $sub2 </th>
    <th> $sub3 </th>
</tr>
END;


echo '<h2> Using Nested Foreach </h2> <br><br>'.$TableHead;

foreach ( $data as $id => $st){
    echo "<tr> <td> $id</td>";
    
    foreach ( $st as $sub => $deg){

        echo"<td> $deg </td>";

    }

    echo '</tr>';

}

echo '</table>';



echo '<br><br>';


echo '<h2> Using Nested For loop </h2><br><br>'.$TableHead;



for ( $row=1; $row <=count($data); $row++ ){
    echo "<tr> <td> $row</td>";
    
    for ( $col =0 ; $col < count($data[$row]) ; $col++){

        switch ($col) {
            case 0:

                echo '<td> '. $data[$row]['name'] .'</td>';
                
              break;

            case 1:
                echo '<td> '. $data[$row][$sub] .'</td>';
              break;

            case 2:
                echo '<td> '. $data[$row][$sub1] .'</td>';
              break;
            
            case 3:
                echo '<td> '. $data[$row][$sub2] .'</td>';
              break;

            case 4:
                echo '<td> '. $data[$row][$sub3] .'</td>';
              break;

            default:
              echo 'Null';
          }

    }

    echo '</tr>';
}//End for

echo '</table>';
//>>>>>> Table End <<<<<<<

echo '<h2> Array_Keys Test </h2><br><br>';

$array = array(0 => 100, "color" => "red");
echo '<pre>';
print_r(array_keys($array));
echo '</pre>';

$array = array("blue", "red", "green", "blue", "blue");
echo '<pre>';
print_r(array_keys($array, "blue"));
echo '</pre>';

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large")
              );

echo '<pre>';
print_r(array_keys($array));
echo '</pre>';

