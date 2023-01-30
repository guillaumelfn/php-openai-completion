<?php

// Fairly easy implementation of openAI in PHP. enjoy !
// PS- Thats the beauty of PHP. its easy !
// This is a prompter.. you can talk to the ultimate god robot from your console.. (or whatever you want it to be)

// include this and you have completion !
require_once 'OpenAI.php';

$openai = New OpenAI();

// Please configure parameters of temperature, top p, frequency and presence penalty, best of, in includes/openAI.php, function configuration
// This is the prompt..

while(1) {

echo "Ask your question to the ultimate god robot.\n";
$question = (string)readline("Q:");

$prompt = "You are an ultimate god robot and you can answer any question. After the answer, no other question can be asked.
Q:".$question."
A:";

 // LEt's get a response.
// Usage : completion(model,start of question, length);
$response = $openai->completion("text-davinci-003", $prompt, 256);

// Let's get the answer from openAI within the response.
$answer =(json_decode($response)->choices[0]->text);

// Let's print both prompt and answer.
echo "A:".$answer."\n";

}

?>
