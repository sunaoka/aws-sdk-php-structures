<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLoadBalancerTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoadBalancerTargetGroupARN
 * @property string $State
 */
class LoadBalancerTargetGroupState extends Shape
{
    /**
     * @param array{
     *     LoadBalancerTargetGroupARN?: string,
     *     State?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
