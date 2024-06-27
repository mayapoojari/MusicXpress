# MusicXpress
An online music streaming site using PHP and Postgres SQL as a part of Date base management system project.

# Prerequisites

```
$ sudo apt-get install lamp-server^
$ sudo apt-get install postgresql pgadmin3
```

To connect PHP to postgresql postgresql-contrib we need to install php5-pqsql

```
$ sudo apt-get install php5-pgsql
```

# Clone the repo

Change directory to the localhost folder
```
$ cd /var/www/html
$ https://github.com/Chirath02/MusicXpress.git
```
If you get permission denied error follow the below steps 
```
$ cd /var/www
$ sudo chown -R username:username html/
$ cd html/
```
This will change the html folder owner from root and try again.

# PgAdmin3

Modify password for role postgres:
```
$ sudo -u postgres psql postgres
$ alter user postgres with password 'postgres';
```
Now connect to pgadmin using username postgres and password postgres

# DDL commands to create Tables

```
$ sudo -u postgres -i
$ psql
```

copy paste and execute all the commands in tables.sql file.

# Connecting to Postgresql in PHP
Connect to psql from php using :

```
$connString = 'host=localhost port=5432 dbname=postgres user=postgres password=postgres';

$conn = pg_connect($connString);
```

# Increase the Upload Size Limit
Change the upload_max_filesize value in /etc/php5/apache2/php.ini

```
upload_max_filesize = 200M
post_max_size = 200M
```

# Install PHP-gd
```
$ sudo apt-get install php5-gd
```
