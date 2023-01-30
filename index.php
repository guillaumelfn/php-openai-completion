<?php

// Fairly easy implementation of openAI in PHP. enjoy ! 
// PS- Thats the beauty of PHP. its easy ! 

// include this and you have completion !
require_once 'OpenAI.php';

$openai = New OpenAI();

// Please configure parameters of temperature, top p, frequency and presence penalty, best of, in includes/openAI.php, function configuration
// This is the prompt..

$question = "You are an ultimate god robot and you can answer any question. After the answer, no other question can be asked.
Q:What is the meaning of life ?
A:";

// LEt's get a response.
// Usage : completion(model,start of question, length);
$response = $openai->completion("text-davinci-003", $question, 256);

// Let's get the answer from openAI within the response.
$answer =(json_decode($response)->choices[0]->text);

// Let's print both prompt and answer.
echo $question.$answer."\n";

?>
