<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TargetDescription|null $Target
 * @property string|null $HealthCheckPort
 * @property TargetHealth|null $TargetHealth
 */
class TargetHealthDescription extends Shape
{
    /**
     * @param array{
     *     Target?: TargetDescription|null,
     *     HealthCheckPort?: string|null,
     *     TargetHealth?: TargetHealth|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
