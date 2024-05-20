<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $website = $_POST["website"];
    $keyword = $_POST["keyword"];

    // Fetch the web page content (you can use cURL or file_get_contents)
    $webContent = file_get_contents($website);

    // Extract visible text (remove HTML tags)
    $visibleText = strip_tags($webContent);

    // Perform keyword search on visible text
    $appearanceCount = substr_count(strtolower($visibleText), strtolower($keyword));

    echo "The keyword '$keyword' appears $appearanceCount times in the visible content of the web page.";
} else {
    echo "No data received. Check if the form is submitting correctly.";
}
?>
