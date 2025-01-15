<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LoadBalancerName
 * @property string|null $State
 */
class LoadBalancerState extends Shape
{
    /**
     * @param array{
     *     LoadBalancerName?: string|null,
     *     State?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
