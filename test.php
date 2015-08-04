<?php
    require 'vendor/autoload.php';

    // Get your access token here: https://www.pushbullet.com/account
    $pb = new Pushbullet\Pushbullet('t4IWglxgIS7dYcmC5J7Llc5v8onzZniU');


    $pb->getDevices();
    print_r ($pb);

    $pb->device("Galaxy Note II")->sendSms("9738680253", "Test from PHP script!");
