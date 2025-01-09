<?php

namespace Sunaoka\Aws\Structures\Lightsail\PutInstancePublicPorts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PortInfo> $portInfos
 * @property string $instanceName
 */
class PutInstancePublicPortsRequest extends Request
{
    /**
     * @param array{
     *     portInfos: list<Shapes\PortInfo>,
     *     instanceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
