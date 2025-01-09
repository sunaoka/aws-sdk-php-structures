<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'active'|'provisioning'|'active_impaired'|'failed' $Code
 * @property string $Reason
 */
class LoadBalancerState extends Shape
{
    /**
     * @param array{
     *     Code?: 'active'|'provisioning'|'active_impaired'|'failed',
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
