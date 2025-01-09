<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetAppBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 */
class GetAppBundleRequest extends Request
{
    /**
     * @param array{appBundleIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
