<?php

// একটি পারিবারিক ফোন বুকের জন্য এরে ডাটা শিট দৈরি করুন এবং সেটাকে পাবলিস্ট করুন

$family_members = [
    [
        "name" => "shuvo",
        "phone" => "01868655178"
    ],
    [
        "name" => "mukta",
        "phone" => "01405121840"
    ],
    [
        "name" => "kona",
        "phone" => "01735090155"
    ],
    [
        "name" => "emdad",
        "phone" => "01680276081"
    ]
];

foreach($family_members as $family_member){
    echo "Name = " . $family_member["name"] . "<br>";
    echo "Phone Number = " . $family_member["phone"] . "<hr>";
}




?>