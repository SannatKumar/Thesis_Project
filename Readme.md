#Description

This Project takes English language text as user Input, analyze the 
sentiment of the statement. After the analysis, input and result is 
stored in the database using python script. The input and result is then 
displayed in the Webpage using php script.

#Details

Python script

A python script rest.py takes the user input from command line. The script
uses Vader Sentiment Library to analyze the sentiment of the statement. The 
input and the result is then updated to the database using mysql.connector.

php script

The php script connects to the database and display the input and Results
in a webpage.

#Raspberry pi

The environment such as Apache,python and python libraries are installed 
inside raspberry pi. After the program is run, the result page can be viewed 
from different devices using the host address within the same network.  

   
