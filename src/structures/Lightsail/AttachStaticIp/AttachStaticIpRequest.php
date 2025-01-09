<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachStaticIp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $staticIpName
 * @property string $instanceName
 */
class AttachStaticIpRequest extends Request
{
    /**
     * @param array{
     *     staticIpName: string,
     *     instanceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
