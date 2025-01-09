<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CarrierGatewayId
 * @property string $CoreNetworkArn
 * @property string $DestinationCidrBlock
 * @property string $DestinationIpv6CidrBlock
 * @property string $DestinationPrefixListId
 * @property string $EgressOnlyInternetGatewayId
 * @property string $GatewayId
 * @property string $InstanceId
 * @property string $InstanceOwnerId
 * @property string $LocalGatewayId
 * @property string $NatGatewayId
 * @property string $NetworkInterfaceId
 * @property string $Origin
 * @property string $State
 * @property string $TransitGatewayId
 * @property string $VpcPeeringConnectionId
 */
class RouteSetDetails extends Shape
{
    /**
     * @param array{
     *     CarrierGatewayId?: string,
     *     CoreNetworkArn?: string,
     *     DestinationCidrBlock?: string,
     *     DestinationIpv6CidrBlock?: string,
     *     DestinationPrefixListId?: string,
     *     EgressOnlyInternetGatewayId?: string,
     *     GatewayId?: string,
     *     InstanceId?: string,
     *     InstanceOwnerId?: string,
     *     LocalGatewayId?: string,
     *     NatGatewayId?: string,
     *     NetworkInterfaceId?: string,
     *     Origin?: string,
     *     State?: string,
     *     TransitGatewayId?: string,
     *     VpcPeeringConnectionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
