<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationCidrBlock
 * @property string $DestinationIpv6CidrBlock
 * @property string $DestinationPrefixListId
 * @property string $EgressOnlyInternetGatewayId
 * @property string $GatewayId
 * @property string $InstanceId
 * @property string $InstanceOwnerId
 * @property string $NatGatewayId
 * @property string $TransitGatewayId
 * @property string $LocalGatewayId
 * @property string $CarrierGatewayId
 * @property string $NetworkInterfaceId
 * @property 'CreateRouteTable'|'CreateRoute'|'EnableVgwRoutePropagation' $Origin
 * @property 'active'|'blackhole' $State
 * @property string $VpcPeeringConnectionId
 * @property string $CoreNetworkArn
 */
class Route extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string,
     *     DestinationIpv6CidrBlock?: string,
     *     DestinationPrefixListId?: string,
     *     EgressOnlyInternetGatewayId?: string,
     *     GatewayId?: string,
     *     InstanceId?: string,
     *     InstanceOwnerId?: string,
     *     NatGatewayId?: string,
     *     TransitGatewayId?: string,
     *     LocalGatewayId?: string,
     *     CarrierGatewayId?: string,
     *     NetworkInterfaceId?: string,
     *     Origin?: 'CreateRouteTable'|'CreateRoute'|'EnableVgwRoutePropagation',
     *     State?: 'active'|'blackhole',
     *     VpcPeeringConnectionId?: string,
     *     CoreNetworkArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
