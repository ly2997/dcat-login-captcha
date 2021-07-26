<?php

/**
 * This file is part of the guanguans/dcat-login-captcha.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    '1.0.0' => [
        'Initial release.',
    ],
    '1.0.1' => [
        'Add default config file.',
        'Add annotation for facades.',
        'Optimize `login_captcha_check` function.',
        'Optimize captcha generate.',
        'Optimize get setting config.',
        'Rename `dcat_login_captcha_check`->`login_captcha_check`.',
        'Rename `dcat_login_captcha_url`->`login_captcha_url`.',
    ],
    '1.0.2' => [
        'Add login_captcha_get function.',
        'Update lang files.',
        'Update extension alias and description.',
        'Optimize LoginCaptchaServiceProvider.',
        'Optimize setting form.',
    ],
    '1.0.3' => [
        'Add CleanObContents Middleware.',
    ],
    '1.0.4' => [
        'Add SetResponseContentType Middleware.',
        'Add content type setting config.',
    ],
    '1.0.5' => [
        'Add BootingHandler.',
    ],
    '1.0.6' => [
        'Rename src/BootingAdmin.php -> src/BootingHandler.php.',
        'Remove src/Http/Controllers/CaptchaController.php`.',
    ],
];
