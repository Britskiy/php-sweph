#SWEPH
![Latest Version](https://img.shields.io/badge/php%20sweph-2.05-green.svg)

Requirements
============
PHP >= 5.2

Installation
============

1. extract archive "copy_to_path.zip" all along the way of nesting
2. open terminal and run ```phpize```
3. ```sudo ./configure --enable-sweph```
4. ```sudo make ```
5. ```sudo make install```
6. add "sweph.so" to 'php.ini' file (generally in /etc/php5/apache2/php.ini) extension=sweph.so
7. restart your webserver (```sudo apache2 restart``` OR  ```sudo nginx restart```)

