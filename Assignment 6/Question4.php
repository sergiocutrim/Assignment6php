<?php
//To create a cookie we use setcookie with the necessary parameters
//name, value, expire, path, domain, secure, httponly
$cookie_name='Assignment6';
$cookie_value='Question4';
setcookie($cookie_name, $cookie_value, time()+(86400*90), '/');
//I set the cookie to have a name and value defined, it will exists for 90 days (86400 seconds = 1 day)

/*

//To modify the cookie we can simply set it again, but first lets print the value we have now.
echo "The Cookie Name now is: " . $cookie_name . "<br>";
echo "The Cookie Value now is: " . $_COOKIE[$cookie_name]. "<br>";
echo "<br>Modifying the Cookie<br>";
$new_cookie_value='NewCookieValue';
setcookie($cookie_name,$new_cookie_value, time()+(86400*90), '/');
echo "<br>The New Cookie Name is: " . $cookie_name  . "<br>";
echo "The New Cookie Value is: " . $_COOKIE[$cookie_name]. "<br>";
echo "Click refresh to see the new value" 

*/

//To delete a cookie we have to set it again but with a negative time
//First let us see if it exists correctly

if (isset($_COOKIE[$cookie_name])) {
    echo "The Cookie Name now is: " . $cookie_name . "<br>";
    echo "The Cookie Value now is: " . $_COOKIE[$cookie_name] . "<br>";
} else {
    echo "Cookie is not set.<br>";
}
echo "<br> Deleting the Cookies <br>";
setcookie($cookie_name, '', time() -3600 , '/');
echo "<br>The Cookie Name now is: " . $cookie_name . "<br>";
echo "The Cookie Value now is: " . $_COOKIE[$cookie_name]. "<br>";






?>