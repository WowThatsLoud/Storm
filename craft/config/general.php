<?php

/**
 * General Configuration.
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'omitScriptNameInUrls' => true,
        'devMode' => true,
        'verificationCodeDuration' => 'P1W',
        'allowAutoUpdates' => false,
        'purgePendingUsersDuration' => false,
        'enableCsrfProtection' => true,
        'phpMaxMemoryLimit' => '256M',
        'sendPoweredByHeader' => false,
        'actionTrigger' => 'actions'
    ),
    'craft.dev' => array(
        'devMode' => true,
        'siteUrl' => 'http://craft.dev/',
        'allowAutoUpdates' => true,
        'backupDbOnUpdate' => false,
    ),
);
