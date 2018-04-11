<?php
use LukeTowers\GoogleDomainVerification\Models\Settings;

Route::get('google{code}.html', function($code) {
    // Get the allowed codes
    $allowedCodes = collect(Settings::get('verification_codes'))->pluck('code')->toArray();

    // Re-add 'google' string to the captured code
    $code = 'google' . $code;

    // Check if the code is allowed
    if (in_array($code, $allowedCodes)) {
        return 'google-site-verification: ' . $code . '.html';
    } else {
        abort(404);
    }
})->where('code', '[0-9a-z]*');
