<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $HealthyThreshold
 * @property int|null $Interval
 * @property string|null $Target
 * @property int|null $Timeout
 * @property int|null $UnhealthyThreshold
 */
class AwsElbLoadBalancerHealthCheck extends Shape
{
    /**
     * @param array{
     *     HealthyThreshold?: int|null,
     *     Interval?: int|null,
     *     Target?: string|null,
     *     Timeout?: int|null,
     *     UnhealthyThreshold?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
