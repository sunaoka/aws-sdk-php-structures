<?php

namespace Sunaoka\Aws\Structures\Lightsail\AllocateStaticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $staticIpName
 */
class AllocateStaticIpRequest extends Request
{
    /**
     * @param array{staticIpName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
