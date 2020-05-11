# Punctual Abstract Developer Test

Please fork this repo and complete the following tasks below. You will need PHP and Composer
installed and running in your environment. You can use the IDE of your choice. Once you run 
`composer install`, you should be able to run the test using PHP's built-in server with the command:

```bash
$ sudo php -S localhost:8000 -t public
```

When you are finished with the test, please submit a pull request for review.

### Task 1

In the `app/view/nav.phtml` file, loop through the contents of the `$nav` array and create
a simple nav object. Make the content of the A tags contain the value of each element in
the `$nav` array and make the HREF attribute a URL slug of the that value, for example:

```html
<a href="/new-orders">New Orders</a>
```

*(The `$nav` array variable is already available in this space via the view.)*

### Task 2

In the `app/view/nav.phtml` file, add a column for the user's email to the table,
containing the user's email.

### Task 3

In the `app/src/Controller/IndexController.php` file, explore `user($id)` method and the
user model object. Get a user by the ID passed down to this controller method. Display
that user's information in the view however you see fit. Consider what to display in the
view if the ID passed does not return a user.

