give you pretty much all info you need to know about PHP
==========================================================
<?php phpinfo(); ?>

PHP INI locate
==============
run phpinfo() above and find "php.ini"
In my case:
/etc/php5/apache2/php.ini

PHP INI important configs to check
====================================
echo ini_get('post_max_size');
memory_limit = 64M
post_max_size = 256M
upload_max_filesize = 256M

PHP Mime type check
===================
mime_content_type ( $_FILES['uploadedfile']['name'] );

