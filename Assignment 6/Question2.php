<?php
//You can start a php session by using session start
session_start();

//As soon as the session starts we have to set the data of the session that belongs to this user specifically
$_SESSION['user'] = "generalUser1";
$_SESSION['login'] = "generalUser1@gmail.com";

//To get the information of the user we just have to print it with echo
echo "The user is: " . $_SESSION['user']. ".<br>";
echo "The user login is: " . $_SESSION['login']. ".<br>";

//To modify the session all we have to do is set new information in the Session.
//It  happens for example after a visitor logs in the website
$_SESSION['user'] = "Sergio Cutrim";
$_SESSION['login'] = "sergiocutrim@gmail.com";
echo "The NEW user is: " . $_SESSION['user']. ".<br>";
echo "The NEW user login is: " . $_SESSION['login']. ".<br>";

//To destroy a session we first clear all the variables
session_unset();
//Now we destroy the session and check if it is really destroyed
session_destroy();
if (isset($_SESSION['user'])) {
    echo "Session user is still set: " . $_SESSION['user'] . "<br>";
} else {
    echo "Session user was Destroyed.<br>";
}
?>