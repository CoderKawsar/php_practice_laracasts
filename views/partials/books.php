<?php
$books = [
        [
            "name" => "Sapiens",
            "author" => "Yuval Noah Harari",
            "ReleaseYear" => 2011
        ],
        [
           "name" => "Frankestein",
           "author" =>"Mary Shelley",
           "releaseYear" =>1818
        ],
        [
           "name" =>"Crime and Punishment",
           "author" =>"Fyodor Dostoevsky",
           "releaseYear" =>1866
        ],
        [
           "name" =>"The Alchemist",
           "author" =>"Publo Coehlo",
           "releaseYear" =>1988
        ],
        [
           "name" =>"Putul Nacher Itikotha",
           "author" =>"Manik Bondopadhyay",
           "releaseYear" =>1935
        ],
        [           
           "name" =>"Aranyak",
           "author" =>"Bibhutibhushan Bandyopadhyay",
           "releaseYear" =>1976
        ],
        [
           "name" =>"Adarsha Hindu Hotel",
           "author" =>"Bibhutibhushan Bandyopadhyay",
           "releaseYear" =>1940
        ],
        [
           "name" =>"Badshai Namdar",
           "author" =>"Humayun Ahmed",
           "releaseYear" =>2011
        ],
        [
           "name" =>"Hazar Bochor Dhore",
           "author" =>"Zahir Raihan",
           "releaseYear" =>1984
        ],
    ];

    // custom filter creation
    // function filter($items, $fn){
    //     $filteredItems = [];

    //     foreach ($items as $item){
    //         if($fn($item)){
    //             $filteredItems[] =  $item;
    //         }
    //     };

    //     return $filteredItems;
    // };

    // $filteredBooks = filter($books, function($book) {
    //     if(isset($book['releaseYear'])){
    //         return $book['releaseYear'] > 1980;
    //     }
    // });

    $filteredBooks = array_filter($books, function($book){
        if(isset($book['releaseYear'])){
            return $book['releaseYear'] > 1980;
        }
    });