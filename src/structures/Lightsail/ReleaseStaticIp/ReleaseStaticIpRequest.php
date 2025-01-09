<?php

namespace Sunaoka\Aws\Structures\Lightsail\ReleaseStaticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $staticIpName
 */
class ReleaseStaticIpRequest extends Request
{
    /**
     * @param array{staticIpName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
