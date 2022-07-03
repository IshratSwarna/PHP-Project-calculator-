Task:
============

Building a calculator (which will perform 4 operations- addition, subtraction, multiplication and division)
using Object Oriented PHP.

Approach:
=============

Files:	1) index.php
	2) calc.inc.php
	3) Calculator.class.php

* index.php file contains some basic html code to get the frontened view. A simple form type div was created to get 
the two numbers and operation type from user.
Besides this file contains js code to send data to the file calc.inc.php and get response from it in JSON in PHP.

*calc.inc.php collects required data from the json file,
then a new instance of Calculator class is created with the collected data.
After that, by calling calculate function the result is stored as response json file which will be accepted in index.php and the result is shown.
