<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ResetCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class ResetCacheRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
