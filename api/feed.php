<?php

header('Content-Type: application/json');

echo '[
    {
        "title"  : "event1",
        "start"  : "2017-01-01"
    },
    {
        "title"  : "event2",
        "start"  : "2017-01-05",
        "end"    : "2017-01-07",
        "color"  : "yellow",
        "textColor": "black"
    },
    {
        "title"  : "event3",
        "start"  : "2017-01-09T12:30:00",
        "allDay" : false
    }
]';

// $events = array();
// $i = 10;
// while($i--) {
//     $e = array();
//     $e['id'] = $i;
//     $e['title'] = "Event number $i";
//     $e['start'] = "2017-01-".$i*2;
//     $e['allDay'] = true;
//     array_push($events, $e);
// }
// echo json_encode($events);
