<?php
    function detectPlatform() {
        $desktopPlatforms = array('windows', 'mac', 'linux');
        $mobilePlatforms = array('ios', 'android');
        $platform = 'Unknown';
        if(preg_match('/iphone|ipad|ipod/i', $_SERVER ['HTTP_USER_AGENT'])) {
            $platform = 'ios';
        } else if(preg_match(stripos($_SERVER['HTTP_USER_AGENT'], 'android')!==false)) {
            $platform = 'android';
        } else if(preg_match('/macintosh|mac os x/i', $_SERVER['HTTP_USER_AGENT'])) {
            $platform = 'mac';
        } else if(preg_match('/windows|win32/i', $_SERVER['HTTP_USER_AGENT'])) {
            $platform = 'windows';
        } else if(preg_match('/linux/i', $_SERVER['HTTP_USER_AGENT'])) {
            $platform = 'linux';
        } else {
            return;
            //add manual system if script fails to detectPlatform.
        }
            
    };
    detectPlatform();
//todo: add distribution system
    ?>
