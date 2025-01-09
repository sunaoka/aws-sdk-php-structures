<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetStaticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $staticIpName
 */
class GetStaticIpRequest extends Request
{
    /**
     * @param array{staticIpName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
