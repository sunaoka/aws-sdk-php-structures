<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $HealthyThreshold
 * @property int $Interval
 * @property string $Target
 * @property int $Timeout
 * @property int $UnhealthyThreshold
 */
class AwsElbLoadBalancerHealthCheck extends Shape
{
    /**
     * @param array{
     *     HealthyThreshold?: int,
     *     Interval?: int,
     *     Target?: string,
     *     Timeout?: int,
     *     UnhealthyThreshold?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
