<?php
// Function to remove duplicate characters from a string
function removeDuplicates($str) {
    $result = '';
    $seen = array();

    // Loop through each character in the string
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        // If the character has not been seen before, add it to the result
        if (!isset($seen[$char])) {
            $result .= $char;
            $seen[$char] = true;
        }
    }

    return $result;
}

// Input string
$inputString = readline("Enter a string: ");

// Call the function to remove duplicates
$resultString = removeDuplicates($inputString);

// Print the result
echo "String without duplicates: " . $resultString . "\n";
?>

?>