<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CarrierGatewayId
 * @property string|null $CoreNetworkArn
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationIpv6CidrBlock
 * @property string|null $DestinationPrefixListId
 * @property string|null $EgressOnlyInternetGatewayId
 * @property string|null $GatewayId
 * @property string|null $InstanceId
 * @property string|null $InstanceOwnerId
 * @property string|null $LocalGatewayId
 * @property string|null $NatGatewayId
 * @property string|null $NetworkInterfaceId
 * @property string|null $Origin
 * @property string|null $State
 * @property string|null $TransitGatewayId
 * @property string|null $VpcPeeringConnectionId
 */
class RouteSetDetails extends Shape
{
    /**
     * @param array{
     *     CarrierGatewayId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     DestinationCidrBlock?: string|null,
     *     DestinationIpv6CidrBlock?: string|null,
     *     DestinationPrefixListId?: string|null,
     *     EgressOnlyInternetGatewayId?: string|null,
     *     GatewayId?: string|null,
     *     InstanceId?: string|null,
     *     InstanceOwnerId?: string|null,
     *     LocalGatewayId?: string|null,
     *     NatGatewayId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     Origin?: string|null,
     *     State?: string|null,
     *     TransitGatewayId?: string|null,
     *     VpcPeeringConnectionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
