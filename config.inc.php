<?php
declare(strict_types=1);

// Blowfish secret for cookie auth; override with PMA_BLOWFISH_SECRET in env for production.
$cfg['blowfish_secret'] = getenv('PMA_BLOWFISH_SECRET') ?: 'h]C+{nqW$omNoTIkCwC$%z-LTcy%p6_j';

// Allow adding arbitrary servers from the UI when PMA_ARBITRARY=1.
$cfg['AllowArbitraryServer'] = getenv('PMA_ARBITRARY') === '1';

// Primary server configuration from environment.
$i = 0;
$i++;
$cfg['Servers'][$i]['auth_type'] = getenv('PMA_AUTH_TYPE') ?: 'cookie';
$cfg['Servers'][$i]['host'] = getenv('PMA_HOST') ?: '127.0.0.1';
$cfg['Servers'][$i]['port'] = getenv('PMA_PORT') ?: '';
$cfg['Servers'][$i]['user'] = getenv('PMA_USER') ?: '';
$cfg['Servers'][$i]['password'] = getenv('PMA_PASSWORD') ?: '';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = getenv('PMA_ALLOW_NO_PASSWORD') === '1';

// Optional phpMyAdmin configuration storage (set envs to use).
// $cfg['Servers'][$i]['pmadb'] = getenv('PMA_PMADB') ?: null;
// $cfg['Servers'][$i]['controluser'] = getenv('PMA_CONTROL_USER') ?: null;
// $cfg['Servers'][$i]['controlpass'] = getenv('PMA_CONTROL_PASS') ?: null;

// Upload/save dirs (leave empty to disable server-side upload/save).
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
