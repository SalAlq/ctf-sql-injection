# CTF Challenge – SQL Injection

## About the Project
This is a simple CTF challenge.  
The goal is to find a security problem SQL Injection in a PHP login form and use it to log in and get the flag.

## Tools
- XAMPP or any server that runs PHP and MySQL
- Web browser

## How to Use
1. Go to C:\xampp\htdocs\ and create a new folder named (ctf_challenge), then copy all challenge files into that folder.
2. Open your browser and go to: http://localhost/phpmyadmin
3. Create a database called: ctf_challenge
4. Click “Import” and upload the file: db.sql
5. Then go to: http://localhost/ctf_challenge/login.php

## How to Solve It
- In the login form, enter in the username this payload: ' OR 1=1 #
- For the password, type anything.
- You will be redirected to another page `dashboard.php` where the flag will appear.
