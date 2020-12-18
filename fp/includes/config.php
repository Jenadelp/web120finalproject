<?php /*opening php tag*/
/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

//echo THIS_PAGE;

//die;

//site keys for web-students.com
$siteKey = "";
$secretKey = "";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los_Angeles');//

//this constant allows a page to know it's own url/name
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Body n' Soul Massage";
        $logo = "";
        $PageID = 'Home';
    break;
        
        case 'about.php':
        $title = "About";
        $logo = "";//change this fontawesome icon!
        $PageID = 'About';
    break;
        
        
        case 'services.php':
        $title = "services";
        $logo = "";//change this fontawesome icon!
        $PageID = 'Services';
    break;
        
       
         case 'contact.php':
        $title = "contact";
        $logo = "";//change this fontawesome icon!
        $PageID = 'Contact';
    break;
        
       
        
       
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
        
}

//*get rid of font awesome $logo if you don't want to change*/
/*here we're creating a function to generate links and keep the highlight on the current page*/

    
    
    //return $myReturn;
    




/*closing php tag*/
?> 