<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServiceRevisionLoadBalancer>|null $loadBalancers
 * @property list<ServiceRevisionVpcLatticeConfiguration>|null $vpcLatticeConfigurations
 */
class ResolvedConfiguration extends Shape
{
    /**
     * @param array{
     *     loadBalancers?: list<ServiceRevisionLoadBalancer>|null,
     *     vpcLatticeConfigurations?: list<ServiceRevisionVpcLatticeConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
