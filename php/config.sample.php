<?php
// Do not edit this file directly. Copy it and edit the clone


$CONFIG = [];	// Don't touch this

// This is the email which will be used to receive the mail
$CONFIG["email_to"] = "email@website.com";

// The email address which will be used to send the message.
// To prevent being labelled as spam, it must be a valid email address from the server hosting this website
$CONFIG["email_from"] = "email@website.com";

// Subject of the email which will be sent to you
$CONFIG["subject"] = "Contact message from website";

// Message to be sent to user when form has been successfully processed
$CONFIG["response"] = "Message received. We will get in touch very soon";

// Input fields that must be included for the form to be accepted
// Note: Any field which has 'mail' in it name will be considered as an email address, and will be checked for email validity
$CONFIG["required"] = [
	"email",
	"message",
];

// Input fields that will be considered to be part of the form. separate multiple values with comma
$CONFIG["allowed"] = [
	"name",
	"email",
	"message",
];

// The input field which will be considered as the email of the user
// This will enable you to send a reply directly from your inbox
// Delete this field if your form users do not provide an email address
$CONFIG["reply_field"] = "email";


// Must point to 'form-processor.php'
// No need to change this if this file is in the same folder/directory as 'form-processor.php'
require("form-processor.php");