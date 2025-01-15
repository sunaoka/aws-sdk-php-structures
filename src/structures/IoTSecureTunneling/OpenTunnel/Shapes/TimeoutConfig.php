<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\OpenTunnel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 720>|null $maxLifetimeTimeoutMinutes
 */
class TimeoutConfig extends Shape
{
    /**
     * @param array{maxLifetimeTimeoutMinutes?: int<1, 720>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
