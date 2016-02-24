Load test.php in your favorite local dev server, and add a get var to the URL, and reload it.
It will var_export the $_GET, and you will see that the $_POST is empty, as it should be.
Now fill something in the text field, and submit the form.
Now the $_GET data is gone, and you see the $_POST data with what ever value you entered in the form.

Now run TestCest.php in Codeception, make sure the test.php file in is the right place so that Codecept can find it.
The test loads the page with a GET variable, and then submits the form.
After the form submits, you can see in the Artifact that both $_POST and $_GET are available after the form submits.

This behaviour is different from the expected behaviour, and in cases where a codebase relies on the $_GET variable being empty, tests fail.
