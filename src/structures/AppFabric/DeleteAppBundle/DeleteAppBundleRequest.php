<?php

namespace Sunaoka\Aws\Structures\AppFabric\DeleteAppBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 */
class DeleteAppBundleRequest extends Request
{
    /**
     * @param array{appBundleIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
