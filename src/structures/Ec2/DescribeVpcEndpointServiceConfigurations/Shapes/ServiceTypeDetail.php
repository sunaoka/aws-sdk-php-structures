<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServiceConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Interface'|'Gateway'|'GatewayLoadBalancer'|null $ServiceType
 */
class ServiceTypeDetail extends Shape
{
    /**
     * @param array{ServiceType?: 'Interface'|'Gateway'|'GatewayLoadBalancer'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
