<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FailureThreshold
 */
class HealthCheckCustomConfig extends Shape
{
    /**
     * @param array{FailureThreshold?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
