<?php

return [

    /*
     * Here you should specify the distinguished names of LDAP groups users
     * must have to authenticate and stay logged in to your application.
     */
    'allowed_groups' => [
        // 'cn=Accounting,ou=Groups,dc=acme,dc=group',
    ],

    // Number of seconds between 1601-01-01 00:00:00 and 1970-01-01 00:00:00
    // This is to account for the difference in a UNIX and LDAP timestamp.
    'windows_epoch_interval' => 11644473600,

];
