<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoadBalancerName
 * @property string $State
 */
class LoadBalancerState extends Shape
{
    /**
     * @param array{
     *     LoadBalancerName?: string,
     *     State?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
