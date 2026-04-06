<?php

namespace Sunaoka\Aws\Structures\GameLift\GetPlayerConnectionDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property int<1, 60000>|null $Port
 */
class PlayerConnectionEndpoint extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     Port?: int<1, 60000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
