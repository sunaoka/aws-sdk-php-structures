<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClassicLoadBalancersConfig|null $ClassicLoadBalancersConfig
 * @property TargetGroupsConfig|null $TargetGroupsConfig
 */
class LoadBalancersConfig extends Shape
{
    /**
     * @param array{
     *     ClassicLoadBalancersConfig?: ClassicLoadBalancersConfig|null,
     *     TargetGroupsConfig?: TargetGroupsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
