<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServiceRevisionLoadBalancer>|null $loadBalancers
 */
class ResolvedConfiguration extends Shape
{
    /**
     * @param array{loadBalancers?: list<ServiceRevisionLoadBalancer>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
