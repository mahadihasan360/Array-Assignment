<?php

// একটি ক্লাবের সকল মেমবারদের ডাটা এরেতে নিয়ে বয়সের উপর বেইজ করে ১৮ বছরের বেশি সবাইতে একটি স্বাগত মেসেজ পাঠান এবং ৪০ বছরের বেশি বয়সকতের শুভকামনা মেজে পাঠান , ,, অবশ্যই মেসেজ গুলা একটি ফাংসনের মাধ্যমে পাঠাবেন , , , এবং যাদের বয়স ১৮ এর কম হবে তাদের পরাশোনার দিকে মনযোগী হওয়ার মেসেজ দিন


$club_members = [
    [
        "name" => "Shuvo",
        "age" => 10
    ],
    [
        "name" => "Kona",
        "age" => 70,
    ],
    [
        "name" => "Mahadi",
        "age" => 35,
    ],
    [
        "name" => "Mim",
        "age" => 53,
    ],
    [
        "name" => "Nohan",
        "age" => 23
    ]
];



foreach($club_members as $club_member){

    if($club_member["age"] > 0 and $club_member["age"] <= 18){

        echo $club_member["name"] . "......" . "Concentrate on Your Studies" . "<hr>";

    }elseif($club_member["age"] >= 19 and $club_member["age"] <= 40){

        echo $club_member["name"] . "......" . "Welcome" . "<hr>";

    }elseif($club_member["age"] >= 40 and $club_member["age"] <= 100){

        echo $club_member["name"] . "......" . "Good luck to you" . "<hr>";

    }else{
        echo "Invalid Age";
    }
}




?>





