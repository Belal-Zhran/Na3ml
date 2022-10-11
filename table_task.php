<?php

$test=[
    1=>['this'=>'0k'],
    2=>['that'=> '0k'],
    3=>['those' =>'0k']
];


$data = [
    1 =>[
        'name'            =>'Ahmed',
        'data structure'  => 88,
        'data mining'     => 70,
        'data base'       => 85,
        'design patterns' => 90


    ],
    2 =>[
        'name'            =>'Hossam',
        'data structure'  => 90,
        'data mining'     => 85,
        'data base'       => 66,
        'design patterns' => 80


    ],
    3 =>[
        'name'            =>'seif',
        'data structure'  => 75 ,
        'data mining'     => 66,
        'data base'       => 77,
        'design patterns' => 88


    ],
    4 =>[
        'name'            =>'khaled',
        'data structure'  => 77,
        'data mining'     => 55,
        'data base'       => 66,
        'design patterns' => 90


    ],
    5 =>[
        'name'            =>'Naser',
        'data structure'  => 66,
        'data mining'     => 57,
        'data base'       => 88,
        'design patterns' => 75


    ],
   
];


echo '<h1>the Test</h1><br> '.$test[1]['this'];

// echo '<pre>';

// print_r($data);

// echo '</pre>';

echo '<br><br>';

$TableHead = <<<'END'
<table border="1" width="800">
<tr>
    <th> ID </th>
    <th> name </th>
    <th> Data structure </th>
    <th> Data mining </th>
    <th> Data base </th>
    <th> Design patterns </th>
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
                echo '<td> '. $data[$row]['data structure'] .'</td>';
              break;

            case 2:
                echo '<td> '. $data[$row]['data mining'] .'</td>';
              break;
            
            case 3:
                echo '<td> '. $data[$row]['data base'] .'</td>';
              break;

            case 4:
                echo '<td> '. $data[$row]['design patterns'] .'</td>';
              break;

            case 5:
                echo '<td> '. $data[$row]['design patterns'] .'</td>';
              break;

            default:
              echo 'Null';
          }

    }

    echo '</tr>';
}
