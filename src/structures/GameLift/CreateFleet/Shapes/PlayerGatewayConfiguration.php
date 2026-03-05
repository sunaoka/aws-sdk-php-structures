<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPv4'|'DUAL_STACK'|null $GameServerIpProtocolSupported
 */
class PlayerGatewayConfiguration extends Shape
{
    /**
     * @param array{GameServerIpProtocolSupported?: 'IPv4'|'DUAL_STACK'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
