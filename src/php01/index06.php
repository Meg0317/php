<?php
$people = [
    [
        'Taro', 25, 'men'
    ],
    [
        'Jiro', 30, 'men' 
    ],
    [
        'Hiroto', 28, 'men'
    ]
];

foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}

