<?php

namespace Sunaoka\Aws\Structures\Lightsail\CloseInstancePublicPorts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PortInfo $portInfo
 * @property string $instanceName
 */
class CloseInstancePublicPortsRequest extends Request
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
