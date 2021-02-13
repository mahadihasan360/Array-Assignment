<?php

// পঞ্চম শ্রেণীর ছাত্রছাত্রীদের কিছু ডাটা নিয়ে একটি এরে স্ট্রাকচার তৈরি করুন যেখানে তাদের রেজাল্টের উপরে বেইজ করে জিপিএ এবং গ্রেড সহ প্রকাশ করা হবে , , , রেজাল্ট পাবলিস্ট করার জন্য অবশ্যই একটি রেজাল্ট ফাংসন বানান এবং এই ফাংসন টি ব্যবহার করে রেজাল্ট পাবলিস্ট করুন । ফাইনালি রেজাল্টে সিজিপিএ এবং ফাইরাল গ্রেড পাবলিস্ট করুন

$students = [
    [
        "id" => 01,
        "name" => "mahadi hasan",
        "age" => 10,
        "cell" => "01868655178",
        "location" => "ecb chattor",
        "marks" =>[98,75,80,76,67]
    ],
    [
        "id" => 02,
        "name" => "shuvo",
        "age" => 11,
        "cell" => "01868655179",
        "location" => "balughat",
        "marks" =>[75,90,85,55,67]
    ],
    [
        "id" => 03,
        "name" => "nohan",
        "age" => 12,
        "cell" => "01868655177",
        "location" => "manikdee",
        "marks" =>[82,78,69,92,77]
    ],
    [
        "id" => 04,
        "name" => "kona",
        "age" => 13,
        "cell" => "01868655176",
        "location" => "mirpur",
        "marks" =>[65,78,99,32,87]
    ],
];

foreach($students as $student){
    echo "Id = " . $student ["id"] . "<br>";
    echo "Name = " . $student ["name"] . "<br>";
    echo "Age = " . $student ["age"] . "<br>";
    echo "Cell = " . $student ["cell"] . "<br>";
    echo "Location = " . $student ["location"] . "<br>";

    $banGpa = '';
    $mathGpa = '';
    $engGpa = '';
    $scGpa = '';
    $relGpa = '';

// for bangla
    if($student["marks"][0] <=32 and $student["marks"][0] >=0){

        echo "Your marks is " . $student["marks"][0] . " in Bangla" . "........." . "Your Gpa " . " $banGpa = 0.00 " . ".........." . " Your Grade : F " . "<br>";

    }elseif($student["marks"][0] >=33 and $student["marks"][0] <=39){

        echo "Your marks is " . $student["marks"][0] . " in Bangla" . "........." . "Your Gpa " . " $banGpa = 1.00 " . ".........." . " Your Grade : D " . "<br>";

    }elseif($student["marks"][0] >=40 and $student["marks"][0] <=49){

        echo "Your marks is " . $student["marks"][0] . " in Bangla" . "........." . "Your Gpa " . " $banGpa = 2.00 " . ".........." . " Your Grade : C " . "<br>";

    }elseif($student["marks"][0] >=50 and $student["marks"][0] <=59){

        echo "Your marks is " . $student["marks"][0] . " in Bangla" . "........." . "Your Gpa " . " $banGpa = 3.00 " . ".........." . " Your Grade : B " . "<br>";

    }elseif($student["marks"][0] >=60 and $student["marks"][0] <=69){

        echo "Your marks is " . $student["marks"][0] . " in Bangla" . "........." . "Your Gpa " . " $banGpa = 3.50 " . ".........." . " Your Grade : A- " . "<br>";

    }elseif($student["marks"][0] >=70 and $student["marks"][0] <=79){

        echo "Your marks is " . $student["marks"][0] . " in Bangla" . "........." . "Your Gpa " . " $banGpa = 4.00 " . ".........." . " Your Grade : A " . "<br>";

    }elseif($student["marks"][0] >=80 and $student["marks"][0] <=100){

        echo "Your marks is " . $student["marks"][0] . " in Bangla" . "........." . "Your Gpa " . " $banGpa = 5.00 " . ".........." . " Your Grade : A+ " . "<br>";

    }else{
        echo "Your marks is " . $student["marks"][0] . " in Bangla" . "........." . "Your Gpa " . " $banGpa = Invalid " . ".........." . " Your Grade : Invalid " . "<hr>";
    }

// for math
    if($student["marks"][1] <=32 and $student["marks"][1] >=0){

        echo "Your marks is " . $student["marks"][1] . " in Math" . "........." . "Your Gpa " . " $mathGpa = 0.00 " . ".........." . " Your Grade : F " . "<br>";

    }elseif($student["marks"][1] >=33 and $student["marks"][1] <=39){

        echo "Your marks is " . $student["marks"][1] . " in Math" . "........." . "Your Gpa " . " $mathGpa = 1.00 " . ".........." . " Your Grade : D " . "<br>";

    }elseif($student["marks"][1] >=40 and $student["marks"][1] <=49){

        echo "Your marks is " . $student["marks"][1] . " in Math" . "........." . "Your Gpa " . " $mathGpa = 2.00 " . ".........." . " Your Grade : C " . "<br>";

    }elseif($student["marks"][1] >=50 and $student["marks"][1] <=59){

        echo "Your marks is " . $student["marks"][1] . " in Math" . "........." . "Your Gpa " . " $mathGpa = 3.00 " . ".........." . " Your Grade : B " . "<br>";

    }elseif($student["marks"][1] >=60 and $student["marks"][1] <=69){

        echo "Your marks is " . $student["marks"][1] . " in Math" . "........." . "Your Gpa " . " $mathGpa = 3.50 " . ".........." . " Your Grade : A- " . "<br>";

    }elseif($student["marks"][1] >=70 and $student["marks"][1] <=79){

        echo "Your marks is " . $student["marks"][1] . " in Math" . "........." . "Your Gpa " . " $mathGpa = 4.00 " . ".........." . " Your Grade : A " . "<br>";

    }elseif($student["marks"][1] >=80 and $student["marks"][1] <=100){

        echo "Your marks is " . $student["marks"][1] . " in Math" . "........." . "Your Gpa " . " $mathGpa = 5.00 " . ".........." . " Your Grade : A+ " . "<br>";

    }else{
        echo "Your marks is " . $student["marks"][1] . " in Math" . "........." . "Your Gpa " . " $mathGpa = Invalid " . ".........." . " Your Grade : Invalid " . "<br>";
    }

// for english
    if($student["marks"][2] <=32 and $student["marks"][2] >=0){

        echo "Your marks is " . $student["marks"][2] . " in English" . "........." . "Your Gpa " . " $engGpa = 0.00 " . ".........." . " Your Grade : F " . "<br>";

    }elseif($student["marks"][2] >=33 and $student["marks"][2] <=39){

        echo "Your marks is " . $student["marks"][2] . " in English" . "........." . "Your Gpa " . " $engGpa = 1.00 " . ".........." . " Your Grade : D " . "<br>";

    }elseif($student["marks"][2] >=40 and $student["marks"][2] <=49){

        echo "Your marks is " . $student["marks"][2] . " in English" . "........." . "Your Gpa " . " $engGpa = 2.00 " . ".........." . " Your Grade : C " . "<br>";

    }elseif($student["marks"][2] >=50 and $student["marks"][2] <=59){

        echo "Your marks is " . $student["marks"][1] . " in English" . "........." . "Your Gpa " . " $engGpa = 3.00 " . ".........." . " Your Grade : B " . "<br>";

    }elseif($student["marks"][2] >=60 and $student["marks"][2] <=69){

        echo "Your marks is " . $student["marks"][2] . " in English" . "........." . "Your Gpa " . " $engGpa = 3.50 " . ".........." . " Your Grade : A- " . "<br>";

    }elseif($student["marks"][2] >=70 and $student["marks"][2] <=79){

        echo "Your marks is " . $student["marks"][2] . " in English" . "........." . "Your Gpa " . " $engGpa = 4.00 " . ".........." . " Your Grade : A " . "<br>";

    }elseif($student["marks"][2] >=80 and $student["marks"][2] <=100){

        echo "Your marks is " . $student["marks"][2] . " in English" . "........." . "Your Gpa " . " $engGpa = 5.00 " . ".........." . " Your Grade : A+ " . "<br>";

    }else{
        echo "Your marks is " . $student["marks"][2] . " in English" . "........." . "Your Gpa " . " $engGpa = Invalid " . ".........." . " Your Grade : Invalid " . "<br>";
    }

// for science
    if($student["marks"][3] <=32 and $student["marks"][3] >=0){

        echo "Your marks is " . $student["marks"][3] . " in Science" . "........." . "Your Gpa " . " $scGpa = 0.00 " . ".........." . " Your Grade : F " . "<br>";

    }elseif($student["marks"][3] >=33 and $student["marks"][3] <=39){

        echo "Your marks is " . $student["marks"][3] . " in Science" . "........." . "Your Gpa " . " $scGpa = 1.00 " . ".........." . " Your Grade : D " . "<br>";

    }elseif($student["marks"][3] >=40 and $student["marks"][3] <=49){

        echo "Your marks is " . $student["marks"][3] . " in Science" . "........." . "Your Gpa " . " $scGpa = 2.00 " . ".........." . " Your Grade : C " . "<br>";

    }elseif($student["marks"][3] >=50 and $student["marks"][3] <=59){

        echo "Your marks is " . $student["marks"][1] . " in Science" . "........." . "Your Gpa " . " $scGpa = 3.00 " . ".........." . " Your Grade : B " . "<br>";

    }elseif($student["marks"][3] >=60 and $student["marks"][3] <=69){

        echo "Your marks is " . $student["marks"][3] . " in Science" . "........." . "Your Gpa " . " $scGpa = 3.50 " . ".........." . " Your Grade : A- " . "<br>";

    }elseif($student["marks"][3] >=70 and $student["marks"][3] <=79){

        echo "Your marks is " . $student["marks"][3] . " in Science" . "........." . "Your Gpa " . " $scGpa = 4.00 " . ".........." . " Your Grade : A " . "<br>";

    }elseif($student["marks"][3] >=80 and $student["marks"][3] <=100){

        echo "Your marks is " . $student["marks"][3] . " in Science" . "........." . "Your Gpa " . " $scGpa = 5.00 " . ".........." . " Your Grade : A+ " . "<br>";

    }else{
        echo "Your marks is " . $student["marks"][3] . " in Science" . "........." . "Your Gpa " . " $scGpa = Invalid " . ".........." . " Your Grade : Invalid " . "<br>";
    }

// for religion
    if($student["marks"][4] <=32 and $student["marks"][4] >=0){

        echo "Your marks is " . $student["marks"][4] . " in Religion" . "........." . "Your Gpa " . " $relGpa = 0.00 " . ".........." . " Your Grade : F " . "<hr>";

    }elseif($student["marks"][4] >=33 and $student["marks"][4] <=39){

        echo "Your marks is " . $student["marks"][4] . " in Religion" . "........." . "Your Gpa " . " $relGpa = 1.00 " . ".........." . " Your Grade : D " . "<hr>";

    }elseif($student["marks"][4] >=40 and $student["marks"][4] <=49){

        echo "Your marks is " . $student["marks"][4] . " in Religion" . "........." . "Your Gpa " . " $relGpa = 2.00 " . ".........." . " Your Grade : C " . "<hr>";

    }elseif($student["marks"][4] >=50 and $student["marks"][4] <=59){

        echo "Your marks is " . $student["marks"][4] . " in Religion" . "........." . "Your Gpa " . " $relGpa = 3.00 " . ".........." . " Your Grade : B " . "<hr>";

    }elseif($student["marks"][4] >=60 and $student["marks"][4] <=69){

        echo "Your marks is " . $student["marks"][4] . " in Religion" . "........." . "Your Gpa " . " $relGpa = 3.50 " . ".........." . " Your Grade : A- " . "<hr>";

    }elseif($student["marks"][4] >=70 and $student["marks"][4] <=79){

        echo "Your marks is " . $student["marks"][4] . " in Religion" . "........." . "Your Gpa " . " $relGpa = 4.00 " . ".........." . " Your Grade : A " . "<hr>";

    }elseif($student["marks"][4] >=80 and $student["marks"][4] <=100){

        echo "Your marks is " . $student["marks"][4] . " in Religion" . "........." . "Your Gpa " . " $relGpa = 5.00 " . ".........." . " Your Grade : A+ " . "<hr>";

    }else{
        echo "Your marks is " . $student["marks"][4] . " in Religion" . "........." . "Your Gpa " . " $relGpa = Invalid " . ".........." . " Your Grade : Invalid " . "<hr>";

    }

    $total = 0;

    foreach($student["marks"] as $marks){
        $total+=$marks  ;
        
    }
    echo "Total = " . $total . "<hr>";
    

}




?>