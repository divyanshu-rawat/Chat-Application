> chat_application :speech_balloon:  :speech_balloon: 

### Installation I like to use Wamp server, so I suggest installing Wamp server . Once that is installed, execute the following instructions.

* Run wamp server :exclamation:.

* Make sure you have placed this entire application inside  :open_file_folder: c://wamp/www/chat_application.

* Left click on the wamp icon in system tray  It will display list of options Select “start all services”.

* Then open your preffered browser and type localhost in address bar Hit enter :exclamation:  It will show the default page of wamp server.

Now include this index.php (my php file name) at the end of the url

#### Setting Up The Database (.SQL File is present in dbase Folder)

#### Method 1 :pencil2: Using Mysql Console !

I like to use mysql, so I suggest installing mysql. Once that is installed, execute the following commands don't worry it is inbuilt in Wamp server !.

* If you are using wamp you can try this. Just type use your_Database_name first.

* Click your wamp server icon then look for MYSQL > MSQL Console then run it.

* If you dont have password, just hit enter and type :

* mysql> use database_name;

* mysql> source location_of_your_file;

* If you have password, you will promt to enter a password. Enter you password first then type:

* mysql> use database_name;

* mysql> source location_of_your_file;

#### Method 2 :pencil2: 

* Left click on the wamp icon in system tray and run PHPMyAdmin (Access your database via PHPMyAdmin).

* Go to the Import files tab

* Click Browse, locate the SQL file on your computer (it is present in sql database folder), click Open, and then click Go.




I have also attached snapshot of application below !!!

:speech_balloon: web-based :incoming_envelope: chat application with :sweat_smile: PHP and j Query. :date:


![alt tag](https://github.com/divyanshu-rawat/chat_application/blob/master/Screenshot%20(296).png)
