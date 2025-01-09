<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrafficMirrorTargetId
 * @property string $NetworkInterfaceId
 * @property string $NetworkLoadBalancerArn
 * @property 'network-interface'|'network-load-balancer'|'gateway-load-balancer-endpoint' $Type
 * @property string $Description
 * @property string $OwnerId
 * @property list<Tag> $Tags
 * @property string $GatewayLoadBalancerEndpointId
 */
class TrafficMirrorTarget extends Shape
{
    /**
     * @param array{
     *     TrafficMirrorTargetId?: string,
     *     NetworkInterfaceId?: string,
     *     NetworkLoadBalancerArn?: string,
     *     Type?: 'network-interface'|'network-load-balancer'|'gateway-load-balancer-endpoint',
     *     Description?: string,
     *     OwnerId?: string,
     *     Tags?: list<Tag>,
     *     GatewayLoadBalancerEndpointId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
