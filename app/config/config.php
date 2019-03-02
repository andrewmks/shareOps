<?php
    
    // DB Parameters

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'shareops');

    // App Root
    define('APPROOT', dirname(dirname(__FILE__)));
    // URL root
    define('URLROOT', 'http://localhost/shareops');
    // Site Name
    define('SITENAME', 'ShareOps');
    // App Version
    define('APPVERSION', '1.0.0');

    //Categories
    define('CATEGORIES', $categories = [
        'Cybersecurity',
        'Cloud Computing', 
        'Software Engineering', 
        'Business',
        'Politics And History',
        'Culture And The Web',
        'Sports And Gaming',
        'Space',
        'Movies',
        'Mysteries And Conspiracy Theories'
    ]);

?>