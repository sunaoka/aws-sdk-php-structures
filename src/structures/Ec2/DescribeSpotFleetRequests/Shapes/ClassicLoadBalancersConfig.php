<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ClassicLoadBalancer>|null $ClassicLoadBalancers
 */
class ClassicLoadBalancersConfig extends Shape
{
    /**
     * @param array{ClassicLoadBalancers?: list<ClassicLoadBalancer>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
