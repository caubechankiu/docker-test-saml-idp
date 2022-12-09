<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'vitt@yopmail.com:123456' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'vitt@yopmail.com',
        ),
        'vitt1:123456' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'vitt1@yopmail.com',
        ),
        'vitt2:123456' => array(
            'uid' => array('3'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'vitt2@yopmail.com',
        ),
    ),

);
