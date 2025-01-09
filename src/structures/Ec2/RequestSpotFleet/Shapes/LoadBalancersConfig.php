<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClassicLoadBalancersConfig $ClassicLoadBalancersConfig
 * @property TargetGroupsConfig $TargetGroupsConfig
 */
class LoadBalancersConfig extends Shape
{
    /**
     * @param array{
     *     ClassicLoadBalancersConfig?: ClassicLoadBalancersConfig,
     *     TargetGroupsConfig?: TargetGroupsConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
