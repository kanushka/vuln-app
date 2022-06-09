## About Vuln App

This is a example application to test Command injection vulnerability.

Here you can simply upload any file using, `avatar/upload` path. I have removed validation intentionaly to demostarate command injection vulnerability.

## Setup

Follow the Laravel [guide line](https://laravel.com/docs/8.x/installation) for pre-requirements.

Then run application using the Laravel command
```
php artisan serve
```
## Example script

The below script will list all files with uploaded file.
You can simply pass filename as a url parameter to delete the file.

```php
<?php
print("Please specify the name of the file to delete");
print("<p>");

print("all files");
print("<br/>");
system("ls");

$file = $_GET['filename'];
system("rm $file");

```

## Author

Kanushka Gayan 

Student Id: MS21911262
