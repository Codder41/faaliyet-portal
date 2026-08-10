<?php

session_start();

date_default_timezone_set('Europe/Istanbul');

define('APP_NAME','Sistem Faaliyet Portalı');

define('DATA_DIR',__DIR__.'/data/');
define('REPORT_DIR',DATA_DIR.'reports/');
define('USER_FILE',DATA_DIR.'users.json');

if(!is_dir(DATA_DIR)){
    mkdir(DATA_DIR,0755,true);
}

if(!is_dir(REPORT_DIR)){
    mkdir(REPORT_DIR,0755,true);
}
