<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $acmCertificateArn
 * @property string|null $loadBalancerArn
 * @property string|null $listenerArn
 * @property string|null $listenerRuleArn
 * @property list<string>|null $testListenerRuleArns
 * @property list<GatewayRouteLoadBalancerSecurityGroup>|null $loadBalancerSecurityGroups
 * @property string|null $serviceSecurityGroupArn
 */
class GatewayRouteAlbResources extends Shape
{
    /**
     * @param array{
     *     acmCertificateArn?: string|null,
     *     loadBalancerArn?: string|null,
     *     listenerArn?: string|null,
     *     listenerRuleArn?: string|null,
     *     testListenerRuleArns?: list<string>|null,
     *     loadBalancerSecurityGroups?: list<GatewayRouteLoadBalancerSecurityGroup>|null,
     *     serviceSecurityGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
