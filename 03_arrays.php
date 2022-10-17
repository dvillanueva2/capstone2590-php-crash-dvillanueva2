<?php
    // Simple Array
    $numbers = [1, 44, 55, 22];
    $fruits = array('apple', 'orange', 'pear');

    print_r ($numbers);

    // var_dump($numbers);

    // echo $fruits[1];
    // echo $fruits[0];

    // Associatiive Array - where we can create an index
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    // echo $colors[4];

    // Strings as keys
    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '00f'
    ];

    // echo $hex['blue'];

    $person = [
        'first_name' => 'Dino',
        'last_name' => 'Villanueva',
        'email' => 'supektible@fakeemail.net'
    ];

    // echo $person['first_name'];

    /* Multidemensional Arrays - Arrays Within Arrays */
    $people = [
        [
            'first_name' => 'Dino',
            'last_name' => 'Villanueva',
            'email' => 'supektible@fakeemail.net'
        ],
        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'supektible@fakeemail.net'
        ],
        [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'supektible@fakeemail.net'
        ]
    ];

    // echo $people[2]['first_name'];

    // we can turn the arrays above into an array of objects using json objects using the json_encode function
    var_dump((json_encode($people)));

    

?>

    

    
