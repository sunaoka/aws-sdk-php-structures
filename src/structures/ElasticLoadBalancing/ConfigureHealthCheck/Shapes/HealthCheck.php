<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ConfigureHealthCheck\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Target
 * @property int<5, 300> $Interval
 * @property int<2, 60> $Timeout
 * @property int<2, 10> $UnhealthyThreshold
 * @property int<2, 10> $HealthyThreshold
 */
class HealthCheck extends Shape
{
    /**
     * @param array{
     *     Target: string,
     *     Interval: int<5, 300>,
     *     Timeout: int<2, 60>,
     *     UnhealthyThreshold: int<2, 10>,
     *     HealthyThreshold: int<2, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
