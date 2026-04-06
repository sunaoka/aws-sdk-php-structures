<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationIpv6CidrBlock
 * @property string|null $DestinationPrefixListId
 * @property string|null $EgressOnlyInternetGatewayId
 * @property string|null $GatewayId
 * @property string|null $InstanceId
 * @property string|null $InstanceOwnerId
 * @property string|null $NatGatewayId
 * @property string|null $TransitGatewayId
 * @property string|null $LocalGatewayId
 * @property string|null $CarrierGatewayId
 * @property string|null $NetworkInterfaceId
 * @property 'CreateRouteTable'|'CreateRoute'|'EnableVgwRoutePropagation'|'Advertisement'|null $Origin
 * @property 'active'|'blackhole'|'filtered'|null $State
 * @property string|null $VpcPeeringConnectionId
 * @property string|null $CoreNetworkArn
 * @property string|null $OdbNetworkArn
 * @property string|null $IpAddress
 */
class Route extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     DestinationIpv6CidrBlock?: string|null,
     *     DestinationPrefixListId?: string|null,
     *     EgressOnlyInternetGatewayId?: string|null,
     *     GatewayId?: string|null,
     *     InstanceId?: string|null,
     *     InstanceOwnerId?: string|null,
     *     NatGatewayId?: string|null,
     *     TransitGatewayId?: string|null,
     *     LocalGatewayId?: string|null,
     *     CarrierGatewayId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     Origin?: 'CreateRouteTable'|'CreateRoute'|'EnableVgwRoutePropagation'|'Advertisement'|null,
     *     State?: 'active'|'blackhole'|'filtered'|null,
     *     VpcPeeringConnectionId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     OdbNetworkArn?: string|null,
     *     IpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
