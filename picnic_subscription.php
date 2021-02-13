<?php

// একটি বনভোজনের জন্য চাদার এরে ডাটা তৈরি করুন যেখানে সবাই সবার বেসিক ইনফরমেসন সহ চাদা প্রদান করবে ইচ্ছামতন , , , ফাইনালি মোট চাদার পরিমান বের করুন


   $members = [
       [
           "name" => "shuvo",
           "phone" => "01868655178",
           "location" => "barontek",
           "money" => 1000
       ],
       [
        "name" => "mahadi",
        "phone" => "01868655177",
        "location" => "manikdee",
        "money" => 800
       ],
       [
        "name" => "kona",
        "phone" => "01868655176",
        "location" => "balughat",
        "money" => 1500
       ],
       [
        "name" => "nohan",
        "phone" => "01868655175",
        "location" => "bauniya",
        "money" => 1200
       ],
];

foreach($members as $member){
    echo "Name = " . $member["name"] . "<br>";
    echo "Phone = " . $member["phone"] . "<br>";
    echo "Location = " . $member["location"] . "<br>";
    echo "Money = " . ".................................." . $member["money"] . "<hr>";


}












?>