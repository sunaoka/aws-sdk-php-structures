<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteDedicatedIpPool;

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
