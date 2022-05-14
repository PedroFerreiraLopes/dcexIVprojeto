<?php

$whitelist = array("outlook.com", "gmail.com", "yahoo.com", "hotmail.com", "hotmail.com.br", 
    "mail.com", "inbox.com", "yahoo.com.br"); //You can add basically whatever you want here because it checks for one of these strings to be at the end of the $email string.

function validateEmailDomain($email, $domains) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        foreach ($domains as $domain) {
            $pos = strpos($email, $domain, strlen($email) - strlen($domain));
    
            if ($pos === false)
                continue;
    
            if ($pos == 0 || $email[(int) $pos - 1] == "@" || $email[(int) $pos - 1] == ".")
                return true;
        }
    
        return false;

    } else {
        echo "Email address '$email' is considered invalid.\n";
        return false;
    }
}
?>