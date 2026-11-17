# lab08

Web Technology Lab 08 - Hassan Abbas (106689188)

## Part 1 - Sessions, include files and hidden fields
- `login.php` - login form (POST to process.php) with a hidden token field
- `process.php` - checks the login and stores the user in `$_SESSION['user']`
- `welcome.php` - shows a welcome message if logged in, otherwise goes back to login.php
- `header.inc` / `footer.inc` - shared header and footer added with `include`

The login page uses the `.php` extension (not `.html`) because `include` is PHP code, and only `.php` files are run by the PHP server.

Login: username `Hassan`, password `106689188`

## Part 2 - MySQL database
- `database/blog_site.sql` - export of the `blog_site` database (tables `users` and `posts`)
