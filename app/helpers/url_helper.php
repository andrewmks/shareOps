<?php
    // Simple page redirect
    function redirect($page) {
        header('location: ' . URLROOT . '/' . $page);
    }
    
    
    //
    function addSpaceBeforeCapital($string) {
        $string = preg_replace('/(?<!\ )[A-Z]/', ' $0', $string);
        return $string;
    }

    /*
    function getCategoryFromUrl() {
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        $currentCategory = $url[2];
        $currentCategory = addSpaceBeforeCapital($currentCategory);
        return $currentCategory;
    }*/


?>