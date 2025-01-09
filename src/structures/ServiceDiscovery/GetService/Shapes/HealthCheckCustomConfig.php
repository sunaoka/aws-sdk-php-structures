<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10> $FailureThreshold
 */
class HealthCheckCustomConfig extends Shape
{
    /**
     * @param array{FailureThreshold?: int<1, 10>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
