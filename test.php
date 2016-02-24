<?php

echo '<pre>SERVER: ';
echo var_export($_SERVER['REQUEST_URI']);
echo '</pre>';

echo '<pre>Post: ';
echo var_export($_POST);
echo '</pre>';

echo '<pre>get: ';
echo var_export($_GET);
echo '</pre>';

?>


<form name="form" action="test.php" method="post" enctype="multipart/form-data">

    <input name="in" type="text" id="texty">
    <button type="submit" name="submit-registration" id="submit-registration" class="submit-registration">CLICKY</button>


</form>