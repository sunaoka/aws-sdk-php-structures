<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDedicatedIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Ip
 */
class GetDedicatedIpRequest extends Request
{
    /**
     * @param array{Ip: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
