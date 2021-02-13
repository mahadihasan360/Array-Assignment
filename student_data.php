<?php


// একটি স্টুডেন্ট এরে ডাটা দৈরি করুন যেখানে প্রায় ২০ জন এর ডাটা থাকবে এবং সেখানে থেকে শুরু মিরপুরের এবং বনানীর বাসিন্দাদের ডাটা প্রিন্ট করুন

$students = [
    [
        "name" => "kona",
        "age" => 20,
        "cell" => "01868655178",
        "location" => "mirpur" 
    ],
    [
        "name" => "shuvo",
        "age" => 23,
        "cell" => "01868655177",
        "location" => "banani" 
    ],
    [
        "name" => "mahadi",
        "age" => 25,
        "cell" => "01868655176",
        "location" => "uttara" 
    ],
    [
        "name" => "nohan",
        "age" => 18,
        "cell" => "01868655175",
        "location" => "banani" 
    ],
    [
        "name" => "bablu",
        "age" => 30,
        "cell" => "01868655174",
        "location" => "khilkhet" 
    ],
    [
        "name" => "washim",
        "age" => 21,
        "cell" => "01868655172",
        "location" => "mirpur" 
    ],
    [
        "name" => "hira",
        "age" => 15,
        "cell" => "01868655164",
        "location" => "kochukhet" 
    ],
    [
        "name" => "mili",
        "age" => 23,
        "cell" => "01868655154",
        "location" => "jatrabari" 
    ],
    [
        "name" => "sabil",
        "age" => 18,
        "cell" => "01868655124",
        "location" => "dhanmondi" 
    ],
    [
        "name" => "shiblu",
        "age" => 22,
        "cell" => "01868655171",
        "location" => "kamarpara" 
    ],
    [
        "name" => "joy",
        "age" => 40,
        "cell" => "01868654174",
        "location" => "mirpur" 
    ],
    [
        "name" => "nila",
        "age" => 19,
        "cell" => "01868653174",
        "location" => "banani" 
    ],
    [
        "name" => "saiful",
        "age" => 20,
        "cell" => "01868635174",
        "location" => "banani" 
    ],
    [
        "name" => "jony",
        "age" => 25,
        "cell" => "01868655184",
        "location" => "mirpur" 
    ],
    [
        "name" => "rana",
        "age" => 30,
        "cell" => "01868655674",
        "location" => "bauniya" 
    ],
    [
        "name" => "shakil",
        "age" => 23,
        "cell" => "01868655974",
        "location" => "mirpur" 
    ],
    [
        "name" => "al-amin",
        "age" => 35,
        "cell" => "01868655174",
        "location" => "banani" 
    ],
    [
        "name" => "shila",
        "age" => 19,
        "cell" => "01868656174",
        "location" => "airport" 
    ],
    [
        "name" => "jhorna",
        "age" => 16,
        "cell" => "01868665174",
        "location" => "mirpur" 
    ],
    [
        "name" => "sohag",
        "age" => 24,
        "cell" => "01735090155",
        "location" => "manikdee" 
    ]
];

foreach($students as $student){


    if($student["location"] == "mirpur" or $student["location"] == "banani" ){
        echo "Name = " . $student["name"] . "<br>";
        echo "Age = " . $student["age"] . "<br>";
        echo "Cell = " . $student["cell"] . "<br>";
        echo "Location = " . $student["location"] . "<hr>";
    }else{
        echo '<span style="background:red;color:white">Invalid Location</span>' . "<hr>";
    }

}



?>