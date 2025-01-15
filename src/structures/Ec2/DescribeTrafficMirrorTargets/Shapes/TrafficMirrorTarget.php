<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrafficMirrorTargetId
 * @property string|null $NetworkInterfaceId
 * @property string|null $NetworkLoadBalancerArn
 * @property 'network-interface'|'network-load-balancer'|'gateway-load-balancer-endpoint'|null $Type
 * @property string|null $Description
 * @property string|null $OwnerId
 * @property list<Tag>|null $Tags
 * @property string|null $GatewayLoadBalancerEndpointId
 */
class TrafficMirrorTarget extends Shape
{
    /**
     * @param array{
     *     TrafficMirrorTargetId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     NetworkLoadBalancerArn?: string|null,
     *     Type?: 'network-interface'|'network-load-balancer'|'gateway-load-balancer-endpoint'|null,
     *     Description?: string|null,
     *     OwnerId?: string|null,
     *     Tags?: list<Tag>|null,
     *     GatewayLoadBalancerEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
