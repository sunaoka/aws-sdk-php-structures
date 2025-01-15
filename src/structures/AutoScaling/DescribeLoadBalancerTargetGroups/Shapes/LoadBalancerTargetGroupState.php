<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLoadBalancerTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LoadBalancerTargetGroupARN
 * @property string|null $State
 */
class LoadBalancerTargetGroupState extends Shape
{
    /**
     * @param array{
     *     LoadBalancerTargetGroupARN?: string|null,
     *     State?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
