-----------------------------------------------------------
# Lessn is an extremely simple, personal url shortener 
  written in PHP with MySQL and mod_rewrite.
-----------------------------------------------------------

Installation

1. Open /lessn/-/config.php in a plaintext editor and
   create a Lessn username and password then enter your
   database connection details.

2. Upload the entire /lessn/ directory to your server. 
   For the shortest urls, place it at the root of your 
   site and rename to a single character. 
   Example: http://doma.in/x/

3. Visit http://doma.in/x/-/ to Lessn a new url and grab
   the bookmarklets (the required database table is created 
   automatically the first time you visit Lessn).

NOTE:

   If your Lessn'd urls aren't working you probably didn't
   upload the .htaccess file. Enable "Show invisible files" 
   in your FTP application.

-----------------------------------------------------------

Updating from 1.0.1

1. Using a tool like PhpMyAdmin or the MySQL CLI change the 
   checksum index type to INDEX (from UNIQUE).
2. Replace all files and directories in /-/ with the updated
   versions in this archive except /-/config.php.
3. (Optional) Define a customized API_SALT in /-/config.php

-----------------------------------------------------------

Updating to 1.0.5

1. Replace all files and directories in /-/ with the updated
   versions in this archive except /-/config.php.
2. (Optional) Define a customized API_SALT in /-/config.php

-----------------------------------------------------------
Lessn is offered as-is, sans support and without warranty.
Copyright © 2009 Shaun Inman http://shauninman.com/