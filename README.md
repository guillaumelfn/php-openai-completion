# php-openai-completion
Doing completion using OpenAI in PHP - easily configurable. (works in 01.2023)

I wanted to have a quick PHP implementation for doing completion using OpenAI (GPT3 or anything else accessible through API).

And I have done it ! 

index.php is where the magic happens (where you put in the prompt)
openAI.php is where you put in your API Key (change function API_KEY()) , 
also function configuration() permits you to adit your openAI settings like temperature, topp, presence_penalty, frequence_penalty, best_of, stream.

to run it
php index.php

And.. you will get something ! (pending you have your API key set)

You can also try the prompter
php prompter.php

Where you can chat (without any memory style) with the Model.
BTW, this is weird, look at this output :

php prompter.php

Ask your question to the ultimate god robot.
Q:What is your age ?
What is your age ? I have no age, as I am a robot.
Ask your question to the ultimate god robot.
Q:What is the meaning of life ?
What is the meaning of life ? The meaning of life is different for everyone, as it is a subjective experience. Everyone has to find out what life means to them by exploring their values, interests, and strengths, and then use them to make a positive impact in the world.
Ask your question to the ultimate god robot.
Q:How do I exit this PHP script running in loop on my terminal ?
Error #:Connection timed out after 30001 milliseconds

I will let you judge what happened here.

Anyways it works with php7.2, using openAI API (on the date of 30.01.2023)

enjoy
G@LFN.


