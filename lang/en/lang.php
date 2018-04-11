<?php
return [
    'plugin'      => [
        'name'        => 'Google Domain Verification',
        'description' => 'Provide responses to Google Domain Verification requests',
    ],

    'permissions' => [
        'tab'          => 'Google Domain Verification',
        'manage_codes' => 'Manage Verification Codes',
    ],

    'settings'    => [
        'description'        => 'Manage Google Domain Verification codes',
        'verification_codes' => 'Verification Codes',
        'code'               => 'Code',
        'code_prompt'        => 'Add new code',
        'code_comment'       => 'Paste the Domain Verification Code (the filename of the HTML file to be uploaded without the .html at the end)',
        'code_description'   => 'Code Description (optional)',
        'code_placeholder'   => 'google1d4b46d16655aed1',
    ],
];
