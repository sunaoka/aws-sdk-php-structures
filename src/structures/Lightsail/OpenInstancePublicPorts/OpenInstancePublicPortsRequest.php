<?php

namespace Sunaoka\Aws\Structures\Lightsail\OpenInstancePublicPorts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PortInfo $portInfo
 * @property string $instanceName
 */
class OpenInstancePublicPortsRequest extends Request
{
    /**
     * @param array{
     *     portInfo: Shapes\PortInfo,
     *     instanceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
