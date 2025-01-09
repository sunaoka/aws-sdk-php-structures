<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\DeleteDedicatedIpPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 */
class DeleteDedicatedIpPoolRequest extends Request
{
    /**
     * @param array{PoolName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
