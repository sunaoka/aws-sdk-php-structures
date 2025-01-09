<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDedicatedIpPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 */
class GetDedicatedIpPoolRequest extends Request
{
    /**
     * @param array{PoolName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
