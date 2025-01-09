<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\DescribeTunnel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxLifetimeTimeoutMinutes
 */
class TimeoutConfig extends Shape
{
    /**
     * @param array{maxLifetimeTimeoutMinutes?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
