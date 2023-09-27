<?php

function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $characters = $lowercase . $uppercase . $numbers . $specialChars;
    
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }
    
    return $password;
}

$passwordLength = 12;
$generatedPassword = generatePassword($passwordLength);

echo "Generated Password: " . $generatedPassword . "\n";


?>