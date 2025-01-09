<?php

namespace Sunaoka\Aws\Structures\SesV2\PutDedicatedIpInPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Ip
 * @property string $DestinationPoolName
 */
class PutDedicatedIpInPoolRequest extends Request
{
    /**
     * @param array{
     *     Ip: string,
     *     DestinationPoolName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
