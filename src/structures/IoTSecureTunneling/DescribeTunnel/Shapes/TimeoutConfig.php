<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\DescribeTunnel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 720> $maxLifetimeTimeoutMinutes
 */
class TimeoutConfig extends Shape
{
    /**
     * @param array{maxLifetimeTimeoutMinutes?: int<1, 720>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
