<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10>|null $FailureThreshold
 */
class HealthCheckCustomConfig extends Shape
{
    /**
     * @param array{FailureThreshold?: int<1, 10>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
