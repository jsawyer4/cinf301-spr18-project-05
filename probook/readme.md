to accuse the database you need to go to the probook file in 
the directory. you first need to do is type 
"php artisan key:generate" 

then once you got the key. go to the .env file and fine"APP_KEY="
in the file it going to be on the third line


Then once you make the database type the 

name 11 line

username 12 line
 
password 13 line

make sure you have php 7.1 or higher before tying to migrate the database code over

to make life simple type
 
"php artisan cashe:clear"

"php artisan view:clear"

"php artisan config:clear"

this way once you have all the new infomation in the
.env file it will clear out all of the old information
and repopulate it with the current information

then type "php artisan migrate"

then your database is fully functional after that


<b>post presentation</b>

Nothing change was not able to figure out the image error and could not find the time to do the group page