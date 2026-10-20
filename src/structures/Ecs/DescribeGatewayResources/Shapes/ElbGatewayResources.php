<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $loadBalancerArn
 * @property string|null $listenerArn
 * @property string|null $securityGroup
 * @property list<string>|null $gatewayRouteArns
 */
class ElbGatewayResources extends Shape
{
    /**
     * @param array{
     *     loadBalancerArn?: string|null,
     *     listenerArn?: string|null,
     *     securityGroup?: string|null,
     *     gatewayRouteArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
