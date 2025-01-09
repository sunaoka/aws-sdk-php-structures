<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ConfigureHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Target
 * @property int $Interval
 * @property int $Timeout
 * @property int $UnhealthyThreshold
 * @property int $HealthyThreshold
 */
class HealthCheck extends Shape
{
    /**
     * @param array{
     *     Target: string,
     *     Interval: int,
     *     Timeout: int,
     *     UnhealthyThreshold: int,
     *     HealthyThreshold: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
