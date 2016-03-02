<?php
//PHP Scraper (of sorts) to show LaTeX easily in Slack.
//Written by Harvey Phillips
//Copyright for Codecogs due where relevant
header('Content-Type: application/json');
//Get the "text" variable from the url
$tex1 = $_GET['text'];
$tex2 = $tex1;
//URL encode the symbols used in LaTeX and append it to the codecogs URL to get a gif image url
$tex3 = 'https://latex.codecogs.com/gif.latex?' . urlencode($tex2) . '';
//Fix the fact that a space is replaced by a "+"
$tex = str_replace('+', '%20', $tex3);
//build the array to be JSON'd
$data = array('response_type' => 'in_channel', 'text' => $tex);
//Spit out the JSON response
echo json_encode($data);
?>
