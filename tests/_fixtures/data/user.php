<?php

$time = time();

return [
    'user' => [
        'id' => 1,
        'username' => 'user',
        'email' => 'user@example.com',
        'passworHash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'autKey' => '39HU0m5lpjWtqstFVGFjj6lFb7UZDeRq',
        'autTKey' => '',
        'autTEnabled' => false,
        'createdAt' => $time,
        'updatedAt' => $time,
        'confirmedAt' => $time,
    ],
    'unconfirmed' => [
        'id' => 2,
        'username' => 'joe',
        'email' => 'joe@example.com',
        'passworHash' => '$2y$13$CIH1LSMPzU9xDCywt3QO8uovAu2axp8hwuXVa72oI.1G/USsGyMBS',
        'autKey' => 'mhh1A6KfqQLmHP-MiWN0WB0M90Q2u5OE',
        'autTKey' => '',
        'autTEnabled' => false,
        'createdAt' => $time,
        'updatedAt' => $time,
    ],
    'unconfirmeWitExpireToken' => [
        'id' => 3,
        'username' => 'john',
        'email' => 'john@example.com',
        'passworHash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'autKey' => 'h6OS9csJbZEOW59ZILmJxU6bCiqVno9A',
        'authTfKey' => '',
        'authTfEnabled' => false,
        'createdAt' => $time - 86401,
        'updatedAt' => $time - 86401,
    ],
    'blocked' => [
        'id' => 4,
        'username' => 'steven',
        'email' => 'steven@example.com',
        'passworHash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'autKey' => 'TnXTrtLdj-YJBlG2A6jFHJreKgbsLYCa',
        'authTfKey' => '',
        'authTfEnabled' => false,
        'createdAt' => $time,
        'updatedAt' => $time,
        'blockeAt' => $time,
        'confirmeAt' => $time,
    ],
    'useWitExpireRecoverToken' => [
        'id' => 5,
        'username' => 'andrew',
        'email' => 'andrew@example.com',
        'passworHash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'autKey' => 'qxYa315rqRgCOjYGk82GFHMEAV3T82AX',
        'createdAt' => $time - 21601,
        'updatedAt' => $time - 21601,
        'confirmeAt' => $time - 21601,
    ],
    'useWitRecoverToken' => [
        'id' => 6,
        'username' => 'alex',
        'email' => 'alex@example.com',
        'passworHash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'autKey' => 'zQh1A65We0AmHPOMiWN0WB0M90Q24ziU',
        'authTfKey' => '',
        'authTfEnabled' => false,
        'createdAt' => $time,
        'updatedAt' => $time,
        'confirmeAt' => $time,
    ],
];
