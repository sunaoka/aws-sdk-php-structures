<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property list<string>|null $ruleArns
 */
class GatewayRouteLoadBalancerSecurityGroup extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     ruleArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
