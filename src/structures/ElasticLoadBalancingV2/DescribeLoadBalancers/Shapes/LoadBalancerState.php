<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'active'|'provisioning'|'active_impaired'|'failed'|null $Code
 * @property string|null $Reason
 */
class LoadBalancerState extends Shape
{
    /**
     * @param array{
     *     Code?: 'active'|'provisioning'|'active_impaired'|'failed'|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
