# magebit_test
For Magebit.
To launch project you need:
	1)Local server(I’ve used XAMPP for macOS)
	2)Browser(I’ve tested on Safari, Google chrome and Opera)
	
Instruction:
	1) Launch your local server  XAMPP
	2) Go to Services
		*Launch MySQL
		*Launch ProFTPD
		*Launch Apache
	3) Go to Network and press “Enable” on localhost:8080 ->80 (Over SSH)
	4) Go to Volumes and press “Mount”

	5) Then go to XAMPP folder
		*You can press on “Explore” button in Volumes
		*You can use search or find lampp folder
	6) In lampp folder open “htdocs” folder
	7) Copy “megabit” folder into “htdocs” folder
	
	8) Now open your browser, and type in search field “http://localhost/phpmyadmin/” or “http://192.168.64.2/phpmyadmin/”
		*if you can’t open phpmyadmin through these two commands, use your local ip-address -> http://*your ip address*/phpmyadmin/
	9) When you have opened phpmyadmin, there will be navigation on the left side
		*press New to create a new database
		*you have to create a new database called “submittedEmails” (Database name -> submittedEmails)
		* leave utf as it is (utf8mb4_general_ci) 
		*press Create
	10) On the top navigation press on “Import” to import my database;
		*Press choose file and choose “submittedEmails.sql” file from my archive (sql folder in archive)
		* Scroll down and press “Go” button
	11) Now you can open webpage
		*In browser type “localhost/magebit/index.php” or “*your ip address/index.php*” (192.168.64.2/magebit/index.php)
		*index.php is main file (Subscribe page)
		*there is 1.Task and 2.Task (HTML and CSS + Js)
	12) Open submittedEmails.php
		*In browser type “localhost/magebit/submittedEmails.php” or “*your ip address/index.php*” (192.168.64.2/magebit/submittedEmails.php)
		*there is 3.Task (PHP).

*
*
*
*
	Hello!
	Here is my non-completed test.(junior/middle front-end dev megabit)
	I tried my best
	I’ve used mobile first css, with-out pre-processors(in daily work I’ll use pre-processors)
	As there was given only 2 designes for mobile and wide screen 1920px, I’ve made close to original designs between mobile and 1920px.
	Js works ok
	Due my poor php skills, I haven’t done 1 task of php
	in submittedEmails.php you can choose and delete emails, sort them by time and name

	chernoff.cs@gmail.com   <— For questions
	20093314  <— for further dialogue
	Denis Chernov

	!Thank you for attention!
*
*
*
*
