<?php

namespace Sunaoka\Aws\Structures\Lightsail\DetachStaticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $staticIpName
 */
class DetachStaticIpRequest extends Request
{
    /**
     * @param array{staticIpName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
