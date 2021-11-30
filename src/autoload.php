<?php

namespace FluxLegacyEnum;

require_once __DIR__ . "/../libs/flux-autoload-api/autoload.php";

use FluxAutoloadApi\Adapter\Autoload\Psr4Autoload;
use FluxAutoloadApi\Adapter\Checker\PhpExtChecker;
use FluxAutoloadApi\Adapter\Checker\PhpVersionChecker;

PhpVersionChecker::new(
    ">=7.4"
)
    ->checkAndDie(
        __NAMESPACE__
    );
PhpExtChecker::new(
    [
        "json"
    ]
)
    ->checkAndDie(
        __NAMESPACE__
    );

Psr4Autoload::new(
    [
        __NAMESPACE__ => __DIR__
    ]
)
    ->autoload();
