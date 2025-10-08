<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateLocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UDPEndpoint|null $UDPEndpoint
 */
class PingBeacon extends Shape
{
    /**
     * @param array{UDPEndpoint?: UDPEndpoint|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
